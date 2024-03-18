<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SectionPdf;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;
class SectionPdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files=SectionPdf::get();
        return view('Dashbord.Pdf.index',compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashbord.Pdf.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file)
        {
            $file=time(). '.'.$request->file->extension();
            $request->file->move(public_path('assets/file'),$file);
        }
        $logo=SectionPdf::create([
            "title" => $request->title,
            'description'=>$request->description,
            'file'=>$file,
        ]);
        return  redirect()->route('pdf.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $file=SectionPdf::find($id);
        return view('Dashbord.Pdf.update',compact('file'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    public function download(Request $request,$file)
    {
        return response()->download(public_path('assets/file/'.$file));
    }
    public function preview(Request $request,$id)
    {
        // dd($id);
        $file = SectionPdf::find($id);
        // dd($file);
        return view('viewpdf',['file'=>$file]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $fileGet=SectionPdf::find($id);

        if($request->file)
        {
            $file=time(). '.'.$request->file->extension();
            $request->file->move(public_path('assets/file'),$file);
            $fileGet->file = $file;
            $fileGet->update();
        }
        $fileGet->title = $request->title;
        $fileGet->description = $request->description;

        $fileGet->update();
        return  redirect()->route('pdf.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file=SectionPdf::find($id)->delete();
        return redirect()->back();
    }
}
