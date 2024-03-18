<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\JopSearch;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User_company;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


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
    public function show(Request $request ,$id)
    {
        // dd($request, $id);
        $auth_id=explode('.',$request->auth_id);

       if(empty($request->auth_id))
       {
        $company=Company::where('id',$id)->get();

    $User_companys=User_company::where([
            'company_id'=>$id,
        ])->get();

  return view('singleComp',compact('company','User_companys'));
       } else {
            $auth_finsh = $auth_id[1];

            $company_id = explode('.', $request->company_id);
            $company_finsh = $company_id[1];



            $company = Company::where('id', $company_finsh)->get();

            $User_companys = User_company::where([
                'user_id' => $auth_finsh,
                'company_id' => $company_finsh,
            ])->get();

            return view('singleComp', compact('company', 'User_companys'));
        }
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
    public function update(Request $request)
    {
         
 $User_company=User_company::where([
            ['company_id', '=', $request->company_id],
            ['user_id', '=', $request->auth_id]

        ])->first();

        if(!empty($User_company))
       {
        return redirect()->back();
    }
       else{

        if($request->status == 'company' || $request->status == 'Super_Admin' || $request->status == 'vistore'  )
        {
            return redirect()->back()->with('message','هذه الصلاحيه للشخص المسجل كباحث عن  عمل فقط');
        }else{



        $company=Company::find($request->company_id);
        $number = $company->numberJoin;
        $number += 1;
        $company->numberJoin=$number;
        $company->update();

        $company=Company::where('id',$request->company_id)->get();


        // for table User_company

       $User_company=User_company::create([
        'user_id'=>$request->auth_id,
        'jopSearch_id'=>$request->auth_id,
        'event_id'=>1,
        'company_id'=>$request->company_id,
       ]);

       $User_companys=User_company::where([
        'user_id'=>$request-> auth_id,
        'company_id'=>$request->company_id,
    ])->get();

        // end User_company

        return view('singleComp',compact('company','User_companys'));

        }
}
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
        public function delete(Request $request)
    {
 
        $User_company=User_company::where([
            ['company_id', '=', $request->company_id],
            ['user_id', '=', $request->user_id]

        ])->delete();
        $company=Company::where('id',$request->company_id)->first();
       $company->numberJoin -= 1;
       $company->update();
       
       return redirect()->route('home_page')->with('massage','تم حذفك من الشركه بنجاح');
 
    }
    public function check()
    {
        if(Auth::user())
        {
            $id = Auth::user()->id;
            $company=Company::where('user_id',$id)->get();
            return view('Dashboardsinglecompany', compact('company'));
        }
    }

    public function search(Request $request)
    {
        if($request->ajax()){
            $data=JopSearch::where('name','like','%'.$request->search.'%')->get();
            $output='';
            $i=1;
        if(count($data) >= 0 && $request->search ){
             $output ='
             <tr>
             <td class="NameCv">السيرة الذاتية</td>
                <td Class="NameJoin">اضافة متقدم </td>
                <td>المسلسل</td>
             </tr>';
            //  <td><a href='. route("pdfdownload", $new[0]->CV).'> تحميل الملف الخاص </a></td>
            //  <td>'.$row->name.'</td>
            //  <td> <a href='.route("get_company.show", $new[0]->user_id).'> التقدم</a></td>
             foreach($data as $row){
                    // $new=JopSearch::where('name',$row->name)->get();
                    $x = count($data);
                    
                    $output.= '<tr class="border-t-2">
                    <td><a href='.asset("assets/file/".$row->CV).' download=""> تحميل الملف الخاص </a></td>
                    <td> <a href='.route("UpdateDash", $row->user_id).'>'. $row->name.'</a></td>
                    <td>'. $i++ .'</td>
                    
             </tr>';
             
                
             }

             $output.='<tr class="border-t-2">
                 <td colspan="5">استعراض '.$x.' النتائج
                 </td>
             </tr>';
        }
        else{

            $output .='No results';

        }


        return $output;

        }
    }

    public function NewUpdate(Request $request,$id)
    
    {
       
        $company=Company::where('user_id',$id)->First();
        $company->work = $request->specification;
        $company->place = $request->place;
        $company->AvailabilityWork = $request->workAvailable;
        $company->update();
        return redirect()->route('dashboardCompany',$id);
    }
    function UpdateDash($id)
    {
        $compare = User_company::where('user_id', $id)->First();
            if ($compare) {

                $getnewcompany = Company::where('user_id', Auth::user()->id)->First();
                $getID = $getnewcompany->id;
            // dd($getID);
                $getCompany=User_company::where([['user_id','=', $id], ['company_id','=',$getID ]])->First();

                if($getCompany)
                {

                    return redirect()->route('dashboardCompany', $id);
                } else {
                    // dd(44);
                    $newId = Auth::user()->id;
                    $company = Company::where('user_id', $newId)->First();
                    if ($company->numberAvailiable != $company->numberJoin) {
                        $number = $company->numberJoin;
                        $number += 1;
                        $company->numberJoin = $number;
                        $company->update();

                        $User_company = User_company::create([
                            'user_id' => $id,
                            'jopSearch_id' => $id,
                            'event_id' => 1,
                            'company_id' => $company->id,
                        ]);
                    }
                    $User_company->save();
                    return redirect()->route('dashboardCompany', $id);
                }
            } else {
                // dd(55);

                $newId = Auth::user()->id;
                $company = Company::where('user_id', $newId)->First();
                if ($company->numberAvailiable != $company->numberJoin) {
                    $number = $company->numberJoin;
                    $number += 1;
                    $company->numberJoin = $number;
                    $company->update();

                    $User_company = User_company::create([
                        'user_id' => $id,
                        'jopSearch_id' => $id,
                        'event_id' => 1,
                        'company_id' => $company->id,
                    ]);
                    $User_company->save();
                    return redirect()->route('dashboardCompany', $id);

                } else {

                    return redirect()->route('dashboardCompany', $id);
                }

            }
    }

}


// <?php

// namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use App\Models\Company;
// use App\Models\JopSearch;
// use App\Models\User;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class CompanyController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//         // dd($id);
//         if(Auth::user())
//         {
//             $id = Auth::user()->id;
//             $company=Company::where('user_id',$id)->get();
//             return view('singleComp', compact('company'));
//         }
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         dd($id);
//         $company=Company::find($id);
//         $number = $company->numberJoin;
//         $number += 1;
//         $company->numberJoin=$number;
//         $company->update();
//         return  redirect()->route('company.index');
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function show($id)
//     {

//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function edit($id)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, $id)
//     {
//         $company=Company::find($id);
//         $number = $company->numberJoin;
//         $number += 1;
//         $company->numberJoin=$number;
//         $company->update();
//         return  redirect()->route('company.index');
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         //
//     }
//     public function check()
//     {
//         if(Auth::user())
//         {
//             $id = Auth::user()->id;
//             $company=Company::where('user_id',$id)->get();
//             return view('Dashboardsinglecompany', compact('company'));
//         }
//     }

//     public function search(Request $request)
//     {
//         if($request->ajax()){

//             $data=User::where('name','like','%'.$request->search.'%')->get();
//             $output='';
//         if(count($data) >= 0 && $request->search ){
//              $output ='
//              <tr>

//              <td>السيرة الذاتية</td>
//                 <td>اسم المتقدم</td>
//                 <td> التقدم</td>
//                  <td>
//                      <input wire:model="selectAll" type="checkbox">
//                  </td>
//              </tr>';
//              foreach($data as $row){
//                     $x = count($data);
//                 $jobs=JopSearch::where('name',$row->name)->get();
//                     $output .= '<tr class="border-t-2">
//                     <td>
//              <a href='.route("pdfdownload", $jobs[0]->CV) .'>تحميل الملف الخاص </a></td>
//              <td>'.$row->name.'</td>

//              <td> <a href='.route("company.show",$jobs[0]->user_id).'> التقدم</a></td>
//              </tr>';
//              }

//              $output.='<tr class="border-t-2">
//                  <td colspan="5">استعراض '.$x.' النتائج
//                  </td>
//              </tr>
//         ';
//         }


//         return $output;

//         }
//     }
//     public function NewUpdate(Request $request,$id)
//     {
//         // dd($id);
//         $company=Company::where('user_id',$id)->First();
//         // dd($company);
//         // "number" => null
//         // "email" => null
//         // "specification" => null
//         // "place" => null
//         // "workAvailable" => null
//         $company->work = $request->specification;
//         $company->place = $request->place;
//         $company->AvailabilityWork = $request->workAvailable;

//         $company->update();
//         return  redirect()->back();
//     }

// }
