<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Event;
use App\Models\Event_Company;
use App\Models\User;

class ComController extends Controller
{


     public function index()
     {
          $companys = Company::where('active', 1)->get();
          return view('Dashbord.Company.index', compact('companys'));
     }

     public function abrove()
     {
          $companys = Company::where('active', 0)->get();

          return view('Dashbord.Company.abrove', compact('companys'));
     }

     public function abrove_show($id)
     {
          $Company = Company::find($id);
          return view('Dashbord.Company.show_abrove', compact('Company'));
     }


     public function abrove_update($id)
     {
          $Company = Company::find($id);
          $Company->active = 1;
          $Company->save();



          return redirect()->back();
     }




     public function abrove_destroy($id)
     {
          $Company = Company::find($id);

          $user = User::find($Company->user_id);

          $Company->delete();
          $user->delete();

          return redirect()->back();
     }

     public function update_subscrip($id)
     {

          $update_subscrip = Company::find($id);
          $Event_Company = Event_Company::where('company_id', $id)->first();
          $event = Event::find(1);


          return view('Dashbord.Event.update_subscrip', compact('update_subscrip', 'event', 'Event_Company'));
     }

     public function edite_subscrip(Request $request, $id)
     {
          $update_subscrip = Company::find($id);
          // عدد اليوز اللي مسجل 
          $number_user = $update_subscrip->numberJoin;

          //  عدد الكرسي الجديد
          $newchair = $request->Number_Avilable;

          if ($newchair < $number_user) {
               return redirect()->back()
                    ->with("ahmed", "  عدد الاسخاص اللي سجلوه ف هذه الشركه اكبر من عدد الكراسي فلا يمكن 
     تعديلها الا بعدد اكبر من  
     
     ,$number_user");
          } else {

               $update_subscrip->update([
                    'numberAvailiable' => $newchair,
               ]);

               $Event_Company = Event_Company::where('company_id', $update_subscrip->id);

               $Event_Company->update([
                    'data' => $request->data,
               ]);

               return redirect()->back()
                    ->with("success", "تم التعديل بنجاح");
          }
     }
}
