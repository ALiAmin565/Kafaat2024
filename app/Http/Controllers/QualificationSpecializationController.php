<?php

namespace App\Http\Controllers;


use App\Models\Qualification;
use App\Models\Specialization;
use Illuminate\Http\Request;

class QualificationSpecializationController extends Controller
{
    public function show()
    {
        // Fetch all qualifications with their specializations
        $qualifications = Qualification::with('specializations')->get();

        // Pass the data to the view
        return view('Dashbord.Education.index', compact('qualifications'));
    }

    public function create()
    {
        return view('Dashbord.Education.create');
    }

    public function store(Request $request)
    {
        $qualification = new Qualification();
        $qualification->name = $request->input('qualification');
        $qualification->save();

        $specializations = $request->input('specializations'); // Assuming this is an array
        foreach ($specializations as $specializationName) {
            $specialization = new Specialization();
            $specialization->name = $specializationName;
            $specialization->qualification_id = $qualification->id;
            $specialization->save();
        }

        return redirect()->back()->with('message', 'Successfully added!');
    }

    public function update(Request $request, $id)
    {
        $qualification = Qualification::findOrFail($id);
        $qualification->name = $request->qualification_name;
        $qualification->save();

        if ($request->has('specializations')) {
            foreach ($request->specializations as $specializationId => $specializationName) {
                $specialization = Specialization::find($specializationId);
                if ($specialization) {
                    $specialization->name = $specializationName;
                    $specialization->save();
                }
            }
        }

        return redirect()->route('qualifications.index')->with('success', 'Qualification and specializations updated successfully');
    }


    public function destroy($id)
    {
        $qualification = Qualification::findOrFail($id);
        $specialization = Specialization::where('qualification_id', $id)->delete();
        return redirect()->route('qualifications.index')->with('success', 'Qualification deleted successfully');
    }

    public function getSpecializationsForQualification($qualificationId)
    {
        $specializations = Qualification::findOrFail($qualificationId)->specializations;
    
        return response()->json($specializations);
    }
}
