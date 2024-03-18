<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;
use App\Models\Event_Company;
use App\Models\User_company;
 



class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $companys=Company::where('active',1)->paginate(8);
        return view('Dashbord.Company.index',compact('companys'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Company=Company::find($id);
        return view('Dashbord.Company.show',compact('Company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Company=Company::find($id);
        return view('Dashbord.Company.update',compact('Company'));
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
        $company=Company::find($id);
        if($request->img)
        {

          $img=time(). '.'.$request->img->extension();
           $request->img->move(public_path('compoany'),$img);
        }elseif(!$request->img)
        {
            $img=$company->img;

        }
          $user=User::find($request->user_id);
         $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),


         ]);

         $company->update([
            'representive'=>$request->representive,
            'brief'=>$request->brief,
            'name'=>$request->name,
            'img'=>$img,

         ]);

         return redirect()->route('Company.index')->with('message'," تم تعديل الشركه بنجاح");



        // name email
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy (Request $request ,$id)
    {

 
$cheack_in_event=Event_Company::where('company_id',$id)->get();
if(count($cheack_in_event))
{
    return redirect()->back()->with('danger','امسحها من الايفنت الاول');
}
else{
    $user_company=User_company::where('company_id',$id)->delete();
 
//   dd(150);
    
//     if(count($user_company))
//     {
//       return redirect()->back()->with('danger',' اصبح لديها مشتركين الان فلايمكن مسحها      ');

//     }
//     else{
//         $user_company=User_company::where('company_id',$id);
      

    
      $Company=Company::find($id);
     

      $img= public_path('compoany/'.$Company->img) ;
       @unlink($img);
        $Company->delete();
    
    
    $ahmed=new UserController();
    $ahmed->destroy($request->user_id);
  
       
  
  
  
  
    return redirect()->back()->with("message"," تم حذف الشركه بنجاح ");
    };
    
}


    }
 
