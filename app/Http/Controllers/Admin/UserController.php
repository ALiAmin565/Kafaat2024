<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $users=User::where('status','Super_Admin')->first();
        return view('Dashbord.Super_Admin.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=User::find(1);
        return view('Dashbord.Super_Admin.update',compact('users'));
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
        
        $validate=$request->validate([
    'password' => ['required', 'min:8', 'confirmed'],
]);


        $user=User::find(1);

        if($request->password ==  null)
        {
       
             $password=$user->password;
              
   
         }else{
            
             $password=Hash::make($request->password);
            
        }
                $user->update([
                  
                  'email'=>$request->email,
                  'password'=>$password,
        ]);

        return redirect()->route('user.index')->with('massage','تم تعديل البينات بنجاح');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=User::find($id)->delete();
        return redirect()->back();
    }
}
