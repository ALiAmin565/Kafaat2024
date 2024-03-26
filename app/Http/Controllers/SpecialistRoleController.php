<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\SpecialistRole;
use App\Models\User;

class SpecialistRoleController extends Controller
{
    public function store(Request $request, $id)
    {
        $company = User::find($id);
        if (!$company) {
            return back()->with('error', 'Company not found.');
        }

        $roles = $request->input('specialistRole');
        $places = $request->input('availablePlaces');
        $qualifications = $request->input('qualifications');
        $conditions = $request->input('jobConditions');
        // dd(count($roles), count($places));
        if ($roles && is_array($roles)) {
            foreach ($roles as $index => $role) {
                SpecialistRole::create([
                    'role' => $role,
                    'available_places' => $places[$index] ?? null,
                    'qualifications' => $qualifications[$index] ?? null,
                    'job_conditions' => $conditions[$index] ?? null,
                    'company_id' => $id
                ]);
            }
        }

        return back()->with('success', 'Specialist roles added successfully.');
    }

    // Method to update the specialist
    // Update the specialist
    public function update(Request $request, $specialistId)
    {
        $request->validate([
            'role' => 'required|string',
            'available_places' => 'required|integer',
            'qualifications' => 'required|string',
            'job_conditions' => 'required|string',
        ]);

        $specialist = SpecialistRole::findOrFail($specialistId);
        $specialist->update($request->all());

        return back()->with('success', 'Specialist updated successfully');
    }

    // Delete a specialist
    public function destroy($specialistId)
    {
        $specialist = SpecialistRole::findOrFail($specialistId);
        $specialist->delete();

        return back()->with('success', 'Specialist deleted successfully');
    }
}
