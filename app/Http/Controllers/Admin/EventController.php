<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Event_Company;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events=Event::get();
        return view('Dashbord.Event.index',compact("events"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

            $request->img->move(public_path('Event'),$img);
        }


        $event=Event::create([
            "name" => $request->name,
            "location" => $request->location,
            "descrption" => $request->descrption,
            "start_date" => $request->start_date,
            "end_date"=>$request->end_date,
            'img'=>$img,
            'place'=>$request->place
           
        ]);
        return  redirect()->route('event.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        $event=Event::find($event->id);
        return view('Dashbord.Event.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event=Event::find($id);
        return view('Dashbord.Event.update',compact('event'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $event=Event::find($request->id);
         
            
        if($request->pdfFile)
        {
            $file=time(). '.'.$request->pdfFile->extension();

            $request->pdfFile->move(public_path('assets/file'),$file);
        }else{
            $file=$event->pdfFile;
        }
            
       

        if($request->img)
        {
            $img=time(). '.'.$request->img->extension();

            $request->img->move(public_path('Event'),$img);
        }else{
            $img=$event->img;
        }


    
        $event->update([
            'name'=>$request->name,
            'descrption'=>$request->descrption,
            'location'=>$request->location,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'img'=>$img,
            'place'=>$request->place,
            'startEvent'=>$request->startEvent,
            'pdfFile'=>$file
        ]);
        return redirect()->route('event.index')->with('ahmed',"تم التعديل بنجاج");


    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       $event__companie=Event_Company::where('event_id',$id)->get();

       if(count($event__companie))
       {


        return redirect()->back()->with("ahmed"," يرجي مسج الشركات من هذه الايفنت الاول ");

       }else{
        $Company=Event::find($id)->delete();
        return redirect()->back()->with('ahmed',"تم الحذف بنجاح");
       };

    }
}
