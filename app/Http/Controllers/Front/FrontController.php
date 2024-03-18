<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User_company;
use App\Models\Logo_company;
use App\Models\Question;
use App\Models\Section_one;
use App\Models\Section_three;
use App\Models\Section_two;
use App\Models\SectionPdf;
use App\Models\Event_Company;
use App\Models\User;
use App\Models\JopSearch;
 use App\Models\vistore;
 
 use App\Models\email;


class FrontController extends Controller
{
public function index()
{
$subscrips=Event_Company::where('event_id',1)->get();
 $events=Event::get();
$section2 = Section_two::find(1);
$section3 = Section_three::find(1);
$logo = Logo_company::get();
$setting = Question::first();

return view('welcome',compact('section2','section3','logo','events','subscrips','setting'));
}


public function user_show(Request $request, $id)
{
    
    if($request->status == 'vistore')
    {
           $user = User::find($id);
           $vistore=vistore::where('user_id',$id)->first();
           $SectionPdf=SectionPdf::get();
             return view('singleVistore',compact('user','SectionPdf','vistore'));
        
    }else{
            $user = User::find($id);
     $User_company=User_company::where('user_id',$id)->get();
 
     $SectionPdf=SectionPdf::get();
     return view('singleUser',compact('user','SectionPdf','User_company'));
        
    }
    
 
}

public function user_update(Request $request)
{
       $validatedData = $request->validate([
          'name' => ['required',  'max:255'],
          
 
       ]);
       
  if($request->status == 'vistore')
    {
          $user = User::find($request->id);
          
             if($request->password ==  null)
     {
    
          $password=$user->password;
           

      }else{
         
          $password=Hash::make($request->password);
         
     }
     
      $user->update([
               'name'=>$request->name,
               'email'=>$request->email,
               'password'=>$password,
     ]);
    //  end update
    
     $ahmed=vistore::where('user_id',$request->id)->get();
        $xx=$ahmed[0];
 
    $xx->update([
     'phone'=>$request->phone,
     'education'=>$request->education,
     'educational_specialization'=>$request->educational_specialization,
   
    ]);

 



    

    return redirect()->route('home_page')->with('massage',"تم تعديل بيناتك الشخصيه بنجاح");
     
          
    }
      //////////////////////////////////////////////////////////////////////////////////////////////// end if vistore
    else{
        $user = User::find($request->id);
     
     if($request->password ==  null)
     {
    
          $password=$user->password;
           

      }else{
         
          $password=Hash::make($request->password);
         
     }
             $user->update([
               'name'=>$request->name,
               'email'=>$request->email,
               'password'=>$password,
     ]);



 
     $ahmed=JopSearch::where('user_id',$request->id)->get();

     if($request->upload_cv)
     {

       $img=time(). '.'.$request->upload_cv->extension();
     
        $request->upload_cv->move(public_path('assets/file'),$img);
         
     }elseif(!$request->upload_cv)
     {
    $img=$ahmed[0]->CV;
 
        
     }
  
     $xx=$ahmed[0];
 
    $xx->update([
     'phone'=>$request->phone,
     'education'=>$request->education,
     'educational_specialization'=>$request->educational_specialization,
     'CV'=>$img,
    ]);

 



    

    return redirect()->route('home_page')->with('massage',"تم تعديل بيناتك الشخصيه بنجاح");
    }
  
 

     
}

public function footer()
{
                  $email= email::find(1);
                  
                  $ahmed=$email->email;
                  
                 return redirect('mailto:'.$ahmed);

}
}