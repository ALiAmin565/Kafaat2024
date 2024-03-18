<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Event;
use App\Models\Event_Company;

class Company_Event extends Controller
{


     public function index()
     {
         $companys=Company::where([
             'active'=>1,
             'event'=>0,
             ])->get();
             $event=Event::get();
             return view('Dashbord.Company_Event.index',compact('companys','event'));

            }

            public function geet(Request $request)
            {
 
          $intgrate=Event_Company::create([
               'event_id'=>$request->event_id,
               'company_id'=>$request->company_id,
               'data'=>$request->data,

          ]);

          $Company=Company::find($request->company_id);
          $Company->update([
               'event'=>1,
               'numberAvailiable'=>$request->numberjoin,
          ]);



      return redirect()->route('company_event');
     }

     //for get all company subscrip in event

     public function subscrip_event($id)
     {

          $subscrips=Event_Company::where('event_id',$id)->get();

          return view('Dashbord.Event.company_subsucrip',compact('subscrips'));

}

//حذف شركه من المواتمر

 public function delete_subscrip(Request $request)
 {

     $Company=Company::find($request->company_id);
     $Company->update([
          'event'=>0,
     ]);
     $id=$request->subscrip_id;
    $subscrips=Event_Company::find($id)->delete();
    return redirect()->back();
 }
}
