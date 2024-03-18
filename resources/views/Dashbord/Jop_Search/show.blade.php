@extends('Dashbord.layout.master')
@section('name')
 صفحه الباحث عن عمل 
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

        رقم الإقامة 
        <br>

        {{ $jopsearch->educational_specialization }}


        <hr>
    </div>
       <div class="col-sm-12">
           

ملف السيره الذاتيه
 <br>
  <div  id="ff" class="bg-grey-04 flex items-center justify-around md:mt-3 p-2 px-4 rounded-xl">
                            <a href="{{ asset('assets/file/' .$jopsearch->CV) }}" target="_blank">
                                <svg class="ml-2" width="33" height="33" viewBox="0 0 33 33" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.525391" width="32.4746" height="32.3788" rx="10" fill="white">
                                    </rect>
                                    <path
                                        d="M18.1816 9.82922V12.6559C18.1816 12.8434 18.2563 13.0231 18.3892 13.1556C18.5222 13.2882 18.7024 13.3626 18.8904 13.3626H21.7255"
                                        stroke="#60A5FA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                    <path
                                        d="M20.308 22.5495H13.2203C12.8443 22.5495 12.4838 22.4005 12.2179 22.1355C11.9521 21.8704 11.8027 21.5109 11.8027 21.1361V11.2426C11.8027 10.8677 11.9521 10.5082 12.2179 10.2432C12.4838 9.97813 12.8443 9.82922 13.2203 9.82922H18.1817L21.7255 13.3626V21.1361C21.7255 21.5109 21.5762 21.8704 21.3103 22.1355C21.0445 22.4005 20.6839 22.5495 20.308 22.5495Z"
                                        stroke="#60A5FA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                    <path d="M14.6387 14.0693H15.3474" stroke="#3B82F6" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M14.6387 16.896H18.8913" stroke="#3B82F6" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M14.6387 19.7228H18.8913" stroke="#3B82F6" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                            <a
                                href="{{ asset('assets/file/' . $jopsearch->CV) }}"class="break-words text-grey font-bold md:w-32 w-20 text-center">السيرة
                                الذاتية</a>
                            {{-- for download --}}
                            <a href="{{ asset('assets/file/' .$jopsearch->CV) }}" download="">
                                <svg class="mr-4" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5 12.5V15.8333C17.5 16.2754 17.3244 16.6993 17.0118 17.0118C16.6993 17.3244 16.2754 17.5 15.8333 17.5H4.16667C3.72464 17.5 3.30072 17.3244 2.98816 17.0118C2.67559 16.6993 2.5 16.2754 2.5 15.8333V12.5"
                                        stroke="#5C5C5C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                    <path d="M5.83398 8.33337L10.0007 12.5L14.1673 8.33337" stroke="#5C5C5C"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M10 12.5V2.5" stroke="#5C5C5C" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
    </div>

   


    {{-- </div> --}}
@endsection
