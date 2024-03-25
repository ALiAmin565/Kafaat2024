@extends('master.master')


@section('container')
    <style>
        @media only screen and (max-width:800px) {

            #no-more-tables tbody,
            #no-more-tables tr,
            #no-more-tables td {
                display: block;
            }

            #no-more-tables thead tr {
                position: absolute;
                display: flex;
                top: -9999px;
                right: -9999px;
            }

            #no-more-tables td {
                position: relative;
                padding-right: 50%;
                word-wrap: break-word;
                border: none;

            }

            #no-more-tables td::before {
                content: attr(data-title);
                position: absolute;
                right: 6px;
                font-weight: bold;
            }

            #no-more-tables tr {
                border-bottom: 1px solid #ccc;
            }

            #no-more-tables table {
                overflow-x: hidden;
            }
        }

        @media print {
            body:not(#test) font-size: 40px !important;
            height: 50px;
            background-color:#ddd;


        }

        #test_print {
            display: none;
        }

        #test {
            border: 1px solid #333;
            border-radius: 10px;
            zoom: 1.1;
            margin-bottom: -10px;

        }

        #test img {

            padding: 0px;
        }

        #qq_code {

            padding-top: 10px;
            letter-spacing: 10px;
            text-align: center;
            padding-left: 10px;


        }

        }
    </style>
    </head>

    <body style="overflow-x: hidden">
        <div id="wert" class="border md:mx-5  p-5 mx-2 rounded-xl xl:w-3/6" dir="rtl"
            style="width: auto;    background: white;">
            <div class="text-grey font-bold  border-b-2 pb-6" style="padding:0%.0%.5%">

                <table style="width:100%;">
                    <tbody>
                        <tr style="display: table-row; justify-content:flex-start; margin:auto; width:50%">
                            <td style="color:black;  text-align: center;    font-size: x-large;
">
                                <span style="color:hsl(177, 82%, 27%);display:block">اسم الباحث</span>
                                {{ Auth::user()->name }}
                            </td>
                            <td style="display: table-row; justify-content:flex-end" style="color:hsl(177, 82%, 27%)">

                            </td>

                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="justify-around margin-center md:flex mt-5">
                <div class="text-grey-03  pr-5 ">



                    <span class="text-red-400 font-bold " style="color:hsl(177, 82%, 27%);  font-size: x-large;"> رقم الباحث
                    </span>

                    <br>

                    <h3>{{ Auth::user()->qr_code }}</h3>
                    <div class="flex justify-center py-3 ">

                        {{-- {!! QrCode::size(150)->generate(Auth::user()->qr_code) !!} --}}

                    </div>

                    <br>

                    <div class="flex justify-center">

                        <button class="text m-3 p-2  flex" id="print"
                            style="    background: white;font-weight: 700; color:hsl(177, 82%, 27%);display:none">
                            طباعة QR كود الباحث
                        </button>

                    </div>
                </div>

                <div class="text-grey-03 ">
                    <p class="text-start mt-8 sm:mt-0" style="color:hsl(177, 82%, 27%)" id="one">
                        ملف السيرة الذاتية
                    </p>
                    <br>
                    <div id="ff" class="bg-grey-04 flex items-center justify-around md:mt-3 p-2 px-4 rounded-xl">
                        <a href="{{ asset('assets/file/' . $user->JopSearch->CV) }}" target="_blank">
                            <svg class="ml-2" width="33" height="33" viewBox="0 0 33 33" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.525391" width="32.4746" height="32.3788" rx="10"
                                    fill="hsl(177, 82%, 27%);">
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
                                <path d="M14.6387 16.896H18.8913" stroke="#3B82F6" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M14.6387 19.7228H18.8913" stroke="#3B82F6" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </a>
                        <a
                            href="{{ asset('assets/file/' . $user->JopSearch->CV) }}"class="break-words text-grey font-bold  text-center">السيرة
                            الذاتية</a>
                        {{-- for download --}}
                        <a href="{{ asset('assets/file/' . $user->JopSearch->CV) }}" download="">
                            <svg class="mr-4" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.5 12.5V15.8333C17.5 16.2754 17.3244 16.6993 17.0118 17.0118C16.6993 17.3244 16.2754 17.5 15.8333 17.5H4.16667C3.72464 17.5 3.30072 17.3244 2.98816 17.0118C2.67559 16.6993 2.5 16.2754 2.5 15.8333V12.5"
                                    stroke="#5C5C5C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path d="M5.83398 8.33337L10.0007 12.5L14.1673 8.33337" stroke="#5C5C5C" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M10 12.5V2.5" stroke="#5C5C5C" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <section class="justify-center xl:flex mx-auto mx-2 " dir="rtl" style="flex-direction: column;">


            @foreach ($SectionPdf as $SectionPdfs)
                <div class="  p-5  rounded-xl   "
                    style="justify-content: center;
    display: flex;
    flex-direction: column;">
                    <div class="text-grey font-bold " style="text-align: center;margin-bottom: 2rem;">
                        {{ $SectionPdfs->title }}</div>
                    <div class="flex justify-around  margin-center mt-5 ">
                        <div class="text-grey font-bold">
                            <div class="bg-grey-04 flex p-2 px-4 items-center justify-between rounded-xl ">
                                <a href="{{ asset('assets/file/' . $SectionPdfs->file) }}">
                                    <svg class="margin-start" width="50" height="50" viewBox="0 0 50 50"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="50" height="50" rx="10" fill="hsl(177, 82%, 27%);">
                                        </rect>
                                        <path
                                            d="M27.1895 15.1785V19.5435C27.1895 19.833 27.3044 20.1105 27.5091 20.3152C27.7137 20.5198 27.9913 20.6348 28.2807 20.6348H32.6458"
                                            stroke="#60A5FA" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M30.4624 34.8213H19.5497C18.9709 34.8213 18.4157 34.5914 18.0064 34.1821C17.5971 33.7728 17.3672 33.2176 17.3672 32.6388V17.361C17.3672 16.7822 17.5971 16.227 18.0064 15.8177C18.4157 15.4084 18.9709 15.1785 19.5497 15.1785H27.1886L32.645 20.6348V32.6388C32.645 33.2176 32.415 33.7728 32.0057 34.1821C31.5964 34.5914 31.0413 34.8213 30.4624 34.8213Z"
                                            stroke="#60A5FA" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M21.7324 21.7261H22.8237" stroke="#3B82F6" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M21.7324 26.0912H28.28" stroke="#3B82F6" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M21.7324 30.4563H28.28" stroke="#3B82F6" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>

                                </a>
                                <a href="https://astepahead.cc/files/how_do_you_create_cv.pdf" class="text-center">
                                    {{ $SectionPdfs->description }}</a>
                                <a href="{{ asset('assets/file/' . $SectionPdfs->file) }}" download="">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.5 12.5V15.8333C17.5 16.2754 17.3244 16.6993 17.0118 17.0118C16.6993 17.3244 16.2754 17.5 15.8333 17.5H4.16667C3.72464 17.5 3.30072 17.3244 2.98816 17.0118C2.67559 16.6993 2.5 16.2754 2.5 15.8333V12.5"
                                            stroke="#5C5C5C" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M5.83398 8.33337L10.0007 12.5L14.1673 8.33337" stroke="#5C5C5C"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M10 12.5V2.5" stroke="#5C5C5C" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </a>

                            </div>
            @endforeach


            </div>
            </div>
            </div>
        </section>
        <section id="three"
            class=" justify-around mx-2 md:flex mt-12 md:mx-5 p-5 rounded-xl text-center print:hidden ">
            <div class="text-grey-03">
                <p style="color:hsl(177, 82%, 27%);;font-weight: 700;
">
                    عدد الشركات التي تقدمت اليها
                </p>

                <br>
                <span class=" font-bold" style="color:hsl(177, 82%, 27%);;font-weight: 700;">
                    @php
                        echo count($User_company);
                    @endphp
                </span>
            </div>
        </section>
        <section class="justify-between md:flex border-b-2 py-5" style="padding: 1rem" dir="rtl">
            <div class="font-bold py-3" style=" color: hsl(177, 82%, 27%);;font-weight: 700;"> السيرة الذاتية</div>
            <div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    style="width: 150px;    color: hsl(177, 82%, 27%);">
                    تعديل البيانات </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">تعديل البينات الخاصة بك </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            {{-- -----------------------------form   --}}
                            <form action="{{ route('user_update', Auth::user()->id) }}" method="POST"
                                enctype="multipart/form-data" class="was-validated">
                                @csrf



                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">الاسم </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            value="{{ Auth::user()->name }}" name="name" required minlength="3">
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">الاميل </label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="name@example.com" value="{{ Auth::user()->email }}"
                                            name="email" required minlength="8">
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"> تغير كلمة السر </label>
                                        <input type="password" class="form-control" id="exampleFormControlInput1"
                                            name="password" minlength="8">
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">
                                            يرجي ملىء هذا الحقل بأكثر من 8 حروف وارقام
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">رقم التليفون </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            value="{{ $user->JopSearch->phone }}" name="phone" required
                                            minlength="10">
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">المؤهل العلمي </label>
                                        <input type="text" class="form-control"id="exampleFormControlInput1"
                                            value="{{ $user->JopSearch->education }}" name="education" required
                                            minlength="4">
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"> رقم الهوية </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            value="{{ $user->JopSearch->educational_specialization }}"
                                            name="educational_specialization" required minlength="4">
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                    <input type="hidden" value="{{ Auth::user()->id }}" name="id">
                                    <input type="hidden" value="{{ $user->JopSearch->user_id }}" name="user_id">
                                    <input type="hidden" value="{{ Auth::user()->status }}" name="status">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">CV </label>
                                        <input type="file" class="form-control" name="upload_cv">
                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary ms-auto"
                                        style="width: 150px;color: hsl(177, 82%, 27%);"> ارسال
                                    </button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger  " data-bs-dismiss="modal"
                                style="width: 150px;color: hsl(177, 82%, 27%);">خروج بدون حفظ</button>
                        </div>



                    </div>
                </div>
            </div>











            </div>
        </section>
        <section class="p-5" dir="rtl" id="for">
            <h3 class="pb-2" style="color: hsl(177, 82%, 27%);;">بيناتك الشخصية </h3>
            <div class="table-responsive" id="no-more-tables">
                <table class="table bg-hsl(177, 82%, 27%);">
                    <thead class="" style="color:hsl(177, 82%, 27%);;font-weight:700">
                        <tr>
                            <th style="color: hsl(177, 82%, 27%);">رقم الجوال</th>
                            <th style="color: hsl(177, 82%, 27%);">البريد الإلكتروني</th>
                            <th style="color: hsl(177, 82%, 27%);">المؤهل العلمي</th>
                            <th style="color: hsl(177, 82%, 27%);">رقم الهوية</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-title="رقم التليفون" style="color: hsl(177, 82%, 27%);font-weight:700">
                                {{ $user->JopSearch->phone }}</td>
                            <td data-title="البريد الإلكتروني" style="color: hsl(177, 82%, 27%);font-weight:700">
                                {{ Auth::user()->email }} </td>
                            <td data-title="المؤهل العلمي" style="color: hsl(177, 82%, 27%);font-weight:700">
                                {{ $user->JopSearch->education }}
                            </td>
                            <td data-title="رقم الهوية" style="color: hsl(177, 82%, 27%);font-weight:700">
                                {{ $user->JopSearch->educational_specialization }}

                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </section>


        <section id="test" style="margin:0px;padding:0px;width:200px;margin:auto;margin-top:0px"
            class="text-center bg-hsl(177, 82%, 27%);">

            <img src="{{ asset('logo/download') }}" alt="" srcset=""
                style="width:60px;height:50px;margin:auto;padding-bottom:0px;margin-bottom:0px;margin-top:5px">

            <span class="text-red-400" id="test_print">يرجى حفظ الباركود لتقديمه لصاحب العمل </span>


            <p style="padding-top:0px;margin-top:0px">{{ Auth::user()->name }}</p>

            <div class="flex justify-center">
{{-- 
                @php
                    $code = Auth::user()->qr_code;
                    $image = QrCode::format('png')->size(150)->generate($code);
                    $name = $code . '.png';
                    $path = public_path() . '/img/' . $name;
                    file_put_contents($path, $image);
                @endphp

                <img src={{ asset('img/' . $name) }}> --}}

            </div>

            <h5 id="qq_code">{{ Auth::user()->qr_code }}</h5>
        </section>


    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $("#test").hide()
        $('#print').click(function() {
            $("#test").show();

            $('body > :not(#test)').hide();

            window.print();
            location.reload(true);


            return false;
        });
    </script>

    </html>
@endsection
