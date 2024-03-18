@extends('Dashbord.layout.master')
@section('name')
    صفحه الشركات
    <i class="fa-solid fa-home"></i>
@endsection
@section('content')
    <div class="col-sm-12">

        الاسم :
        <br>
        {{ $Company->User->name }}
        <hr>
        <p> اميل الشركه</p>
        {{ $Company->User->email }}

        <hr>
    </div>
    <div class="col-sm-12">

        موظف الشركه
        <br>
        {{ $Company->representive }}
        <hr>
    </div>
    <div class="col-sm-12">

        صوره الشركه
        <br>

        <img src="{{ asset('compoany/' . $Company->img) }}" alt="dd" width="100px" height="100px">

        <hr>
    </div>


    <div class="col-sm-12">

        صوره الباركود
        <br>
            <img src="{{ asset('img/qrCode/'. $Company->id .'.png') }}" alt="dd" width="100px" height="100px">

        <p> رقم البار كود</p>
        <h2 class="mt-4 d-inline ">{{ $Company->User->qr_code }}</h2>

        <hr>
    </div>


    <div class="col-sm-12">

        نبذه عن الشركه
        <br>

        {{ $Company->representive }}


        <hr>
    </div>

    {{-- </div> --}}
@endsection
