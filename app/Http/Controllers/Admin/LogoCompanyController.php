<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Logo_company;
use Illuminate\Http\Request;

class LogoCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image=Logo_company::get();
        return view('Dashbord.Logo.index',compact('image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashbord.Logo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->img)
        {
            $img=time(). '.'.$request->img->extension();
            $request->img->move(public_path('assets/img/clients'),$img);
        }
       
        $logo=Logo_company::create([
            "alt" => $request->alt,
            'image'=>$img,
        ]);
        return  redirect()->route('logo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $logo=Logo_company::find($id);
        return view('Dashbord.Logo.update',compact('logo'));
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $logo=Logo_company::find($id);
        if($request->img)
        {
            $img=time(). '.'.$request->img->extension();
            $request->img->move(public_path('assets/img/clients'),$img);
            $logo->image = $img;
        }
        $logo->alt = $request->alt;
        $logo->update();
        return  redirect()->route('logo.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Company=Logo_company::find($id)->delete();
        return redirect()->back();
    }
}
