<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JopSearch;
use App\Models\User;
use App\Models\User_company;
use Illuminate\Support\Facades\Hash;



class LoginController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $Securitys=User::where('status','Jop_serach')->paginate(20);
        return view('Dashbord.Jop_Search.index',compact('Securitys'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashbord.Jop_Search.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'password'=>'required|min:8|confirmed',
            'name'=>'required|min:2',
            'email'=>'required|unique:users',
        ]);
        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput();

        } 
        else{
        
            $security=Security::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->number,
                'password'=>Hash::make($request->password),
                'role'=>"Security",
            ]);

            return redirect()->route('user.index')->with('massage','تمت الاضافه بنجاح');
        }

     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Security  $security
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $Securitys=User::find($id);
         $jopsearch=JopSearch::where('user_id',$id)->first();
        return view('Dashbord.Jop_Search.show',compact('Securitys','jopsearch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Security  $security
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
      $Securitys=User::find($id);
    
    $jopsearch=JopSearch::where('user_id',$id)->first();
    
         return view('Dashbord.Jop_Search.update',compact('Securitys','jopsearch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Security  $security
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         
  $user = User::find($id);
     
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



 
     $ahmed=JopSearch::where('user_id',$id)->get();

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

 



    

    return redirect()->route('user_serach')->with('massage',"تم تعديل بيناتك الشخصيه بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Security  $security
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $user_company=User_company::where('user_id',$id)->get();
        
      if(count($user_company))
{
                  $user_company=User_company::where('user_id',$id)->delete();
                  $jopsearch=JopSearch::where('user_id',$id)->delete();
                  $user=User::find($id)->delete();
                 return redirect()->route('user_serach')->with('massage','تمت الحذف بنجاح');


}
   else{$jopsearch=JopSearch::where('user_id',$id)->delete();
        $user=User::find($id)->delete();
        
         
        return redirect()->route('user_serach')->with('massage','تمت الحذف بنجاح');

}
    }
}
