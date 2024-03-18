<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting=Question::first();
      
        return view('Dashbord.Question.index',compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashbord.Question.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $logo=Question::create([
            "question" => $request->question,
            'answer'=>$request->answer,
        ]);
        return  redirect()->route('question.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question=Question::find($id);
     
        return view('Dashbord.Question.update',compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $setting=Question::find($id);
     
        return view('Dashbord.Question.update',compact('setting'));
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
        
        $question=Question::find($id);
        
       if($request->img)
        {
            \File::delete(public_path('Setting/'.$question->logo_img));

           $img='1676055853.jpg';
       

            $request->img->move(public_path('Setting'),$img);
        }else{
            $img=$question->logo_img;
        }


    
        $question->update([
            'artical'=>$request->artical,
            'title_company'=>$request->title_company,
            'logo_img'=>$img,
         
        ]);
        return redirect()->route('setting.index')->with('massage',"تم التعديل بنجاج");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question=Question::find($id)->delete();
        return redirect()->back();
    }
}