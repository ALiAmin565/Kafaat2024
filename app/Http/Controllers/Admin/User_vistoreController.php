<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\vistore;
use App\Models\User_company;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Security;

class User_VistoreController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Securitys=User::where('status','vistore')->paginate(8);
        return view('Dashbord.Vistor.index',compact('Securitys'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashbord.Vistor.create');
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
         $jopsearch=vistore::where('user_id',$id)->first();

        return view('Dashbord.Vistor.show',compact('Securitys','jopsearch'));
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

    $jopsearch=vistore::where('user_id',$id)->first();

         return view('Dashbord.Vistor.update',compact('Securitys','jopsearch'));
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




     $ahmed=vistore::where('user_id',$id)->get();



     $xx=$ahmed[0];

    $xx->update([
     'phone'=>$request->phone,
     'education'=>$request->education,
     'educational_specialization'=>$request->educational_specialization,

    ]);







    return redirect()->route('user_vistore')->with('massage',"تم تعديل بيناتك الشخصيه بنجاح");
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
                  $jopsearch=vistore::where('user_id',$id)->delete();
                  $user=User::find($id)->delete();
                 return redirect()->route('user_serach')->with('massage','تمت الحذف بنجاح');


}
   else{$jopsearch=vistore::where('user_id',$id)->delete();
        $user=User::find($id)->delete();



        return redirect()->route('user_vistore')->with('massage','تمت الحذف بنجاح');

}
    }
}
