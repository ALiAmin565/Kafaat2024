@extends('Dashbord.layout.master')
@section('name')
        صفحة الزائر 
<i class="fa-solid fa-home"></i>
@endsection
@section('content')

@section('content')
    <div class="col-sm-12">

        الاسم :
        <br>
        {{ $Securitys->name }}
        <hr>
    </div>

    
    <div class="col-sm-12">

      الاميل : 
        <br>
        {{ $Securitys->email }}
        <hr>
    </div>




    <div class="col-sm-12">

        رقم التليفون
        <br>

        {{ $jopsearch->phone }}


        <hr>
    </div>
       <div class="col-sm-12">

          المؤهل العلمي   
        <br>

        {{ $jopsearch->education }}


        <hr>
    </div>
       <div class="col-sm-12">

        التخصص  
        <br>

        {{ $jopsearch->educational_specialization }}


        <hr>
    </div>
  
   


    {{-- </div> --}}
@endsection
