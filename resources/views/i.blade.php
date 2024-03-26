<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>كفاءات تقنية</title>
    <meta http-equiv="refresh" content="7200">
    <!-- Styles -->
    <link rel="stylesheet" href="css\app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.css">
    <!-- Scripts -->
    <script src="js/app.js" defer></script
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        [wire\:loading],
        [wire\:loading\.delay],
        [wire\:loading\.inline-block],
        [wire\:loading\.inline],
        [wire\:loading\.block],
        [wire\:loading\.flex],
        [wire\:loading\.table],
        [wire\:loading\.grid],
        [wire\:loading\.inline-flex] {
            display: none;
        }

        [wire\:loading\.delay\.shortest],
        [wire\:loading\.delay\.shorter],
        [wire\:loading\.delay\.short],
        [wire\:loading\.delay\.long],
        [wire\:loading\.delay\.longer],
        [wire\:loading\.delay\.longest] {
            display: none;
        }

        [wire\:offline] {
            display: none;
        }

        [wire\:dirty]:not(textarea):not(input):not(select) {
            display: none;
        }

        input:-webkit-autofill,
        select:-webkit-autofill,
        textarea:-webkit-autofill {
            animation-duration: 50000s;
            animation-name: livewireautofill;
        }

        @keyframes livewireautofill {
            from {}
        }
    </style>

    <script type="text/javascript">
        (function() {
            var rootScript = '../cdn.jsdelivr.net/npm/%40flasher/flasher%401.1.1/dist/flasher.min.js';
            var FLASHER_FLASH_BAG_PLACE_HOLDER = {};
            var options = mergeOptions([], FLASHER_FLASH_BAG_PLACE_HOLDER);

            function mergeOptions(first, second) {
                return {
                    context: merge(first.context || {}, second.context || {}),
                    envelopes: merge(first.envelopes || [], second.envelopes || []),
                    options: merge(first.options || {}, second.options || {}),
                    scripts: merge(first.scripts || [], second.scripts || []),
                    styles: merge(first.styles || [], second.styles || []),
                };
            }

            function merge(first, second) {
                if (Array.isArray(first) && Array.isArray(second)) {
                    return first.concat(second).filter(function(item, index, array) {
                        return array.indexOf(item) === index;
                    });
                }
                return Object.assign({}, first, second);
            }

            function renderOptions(options) {
                if (!window.hasOwnProperty('flasher')) {
                    console.error('Flasher is not loaded');
                    return;
                }
                window.flasher.render(options);
            }

            function render(options) {
                if ('loading' !== document.readyState) {
                    renderOptions(options);
                    return;
                }
                document.addEventListener('DOMContentLoaded', function() {
                    renderOptions(options);
                });
            }
            document.addEventListener('flasher:render', function(event) {
                render(event.detail);
            });
            if (window.hasOwnProperty('flasher') || !rootScript || document.querySelector('script[src="' + rootScript +
                    '"]')) {
                render(options);
            } else {
                var tag = document.createElement('script');
                tag.setAttribute('src', rootScript);
                tag.setAttribute('type', 'text/javascript');
                tag.onload = function() {
                    render(options);
                };
                document.head.appendChild(tag);
            }
        })();
    </script>
    <style>
        .loh {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #01579B;
            color: #ffffff;
        }

        .log {
            display: none;
        }

        #logo_for_phone {
            display: none;
        }

        #homepage_forPhone {
            display: none
        }

        #login_for_web2 {
            display: none
        }

        #login_for_web {
            display: none
        }

        @media screen and (max-width: 992px) {
            #media {
                float: right;

            }

            .log {
                display: block
            }

            #rtl a {
                display: block;
                text-align: center
            }

            #logo_for_phone {
                display: inline;
            }

            #logo_phone {
                margin-right: auto;
                padding: 10px;
            }

            #contoller {
                margin-right: 50px
            }

            #homepage_forPhone {
                display: inline;

            }

            #rtl #homepage_forPhone2 {
                background-color: red;
                display: none
            }

            #contoller {
                display: none;
            }

            #navbarCollapse form {
                text-align: center
            }

            #not_login2 {
                display: none
            }

            #not_login {
                display: none
            }

            #login_for_web2 {
                display: inline-block
            }

            #login_for_web {
                display: inline-block
            }
        }

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
    </style>
    @include('include.css')

</head>

<body class="" style="">

    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">


        @if (Auth::check())

            <ul class="nav navbar-nav">

                <li class="dropdown">

                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <div class="loh">
                            <p class="text-center" style="font-weight: bolder;font-size: 2rem;">
                                @php
                                    $ahmed = str_split(Auth::user()->name);
                                    echo ucfirst($ahmed[0] . $ahmed[1]);
                                @endphp
                            </p>
                        </div>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf

                        </form>

                        <li><a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            @if (Auth::user()->status == 'company')
                <a href="{{ route('home_page') }}" id="logo_phone">
                    <img id="logo_for_phone" class="img-fluid me-2" src="{{ asset('logo/LogoMain.png') }}"alt=""
                        style="width: 180px;">
                </a>
                <form action={{ route('dashboardCompany') }} method="get">
                    <button class="btn btn-success ms-2" id="contoller" type="submit"
                        style="color: hsl(177, 82%, 27%);
      background: white;
      font-weight: bold;
      width: fit-content;
      ">
                        لوحه التحكم</button>

                </form>
            @elseif (Auth::user()->status == 'Jop_serach')
                <a href="{{ route('home_page') }}" id="logo_phone">
                    <img id="logo_for_phone" class="img-fluid me-2" src="{{ asset('logo/LogoMain.png') }}"alt=""
                        style="width: 200px;">
                </a>
                <form action={{ route('user_show', Auth::user()->id) }} method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ Auth::user()->id }}" id="">
                    <button class="btn  ms-2" id="contoller"> لوحه التحكم</button>


                </form>
            @elseif (Auth::user()->status == 'Super_Admin')
                <a href="{{ route('home_page') }}" id="logo_phone">
                    <img id="logo_for_phone" class="img-fluid me-2" src="{{ asset('logo/LogoMain.png') }}"alt=""
                        style="width: 200px;">
                </a>



                <a href="{{ route('Admin_Home') }}">
                    <button class="btn ms-2" id="contoller"> صفحه التحكم</button>
                </a>
                </form>
            @endif
        @else
            <form action={{ route('login') }} method="GET">
                <button class="btn btn-success" id="not_login2"
                    style="color: hsl(177, 82%, 27%);
      background: white;
      font-weight: bold;"> تسجيل
                    الدخول</button>
            </form>
            <a href="{{ route('home_page') }}" id="logo_phone">
                <img id="logo_for_phone" class="img-fluid me-2" src="{{ asset('logo/LogoMain.png') }}"alt=""
                    style="width: 200px;">
            </a>
        @endif

        {{-- ----------------------------------------------------------- --}}


        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            style="    width: fit-content;">
            <span class="navbar-toggler-icon" onclick="ahmed()"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav m-auto py-4 py-lg-0" id="rtl">
                <a href="{{ route('home_page') }}" id="homepage_forPhone" class="nav-item nav-link active"
                    style="font-size: larger;
font-weight: 700;

">الصفحه الرئيسية</a>

                <a href="{{ route('applicants') }}" class="nav-item nav-link"
                    style="font-size: larger;
font-weight: 700;">
                    ملفات المعرض</a>

                <a href="{{ route('home_page') }}" id="homepage_forPhone2" class="nav-item nav-link active"
                    style="font-size: larger;
    font-weight: 700;

    width: fit-content;

    ">الصفحه الرئيسية</a>


                @if (Auth::check())
                    <div class="log">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf

                        </form>
                        @if (Auth::user()->status == 'company')
                            <form action={{ route('dashboardCompany') }} method="get">
                                <button class=" btn btn-success me-2" id="contoller2"
                                    style="color: hsl(177, 82%, 27%);
                  background: white;
                  font-weight: bold;

    width: fit-content;
">
                                    لوحه التحكم</button>


                            </form>
                        @elseif (Auth::user()->status == 'Jop_serach')
                            <form action={{ route('user_show', Auth::user()->id) }} method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ Auth::user()->id }}" id="">
                                <button class=" btn btn-success me-2" id="contoller2"
                                    style="color: hsl(177, 82%, 27%);
                  background: white;
                  font-weight: bold;


    width: fit-content;
">
                                    لوحه التحكم</button>


                            </form>
                        @elseif (Auth::user()->status == 'Super_Admin')
                            <a href="{{ route('Admin_Home') }}">
                                <button class=" btn btn-success me-2" id="contoller2"
                                    style="color: hsl(177, 82%, 27%);
                      background: white;
                      font-weight: bold;

    width: fit-content;
">
                                    لوحه التحكم</button>

                            </a>
                            </form>
                        @endif
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
document.getElementById('logout-form').submit();">تسجيل
                            الخروج</a>
                @endif

                @if (!Auth::check())
                    <form action={{ route('login') }} method="GET">
                        <button class=" btn btn-success me-2" id="login_for_web"
                            style="color: hsl(177, 82%, 27%);
              background: white;
              font-weight: bold;
              width:130px;
              height:50px;
    width: fit-content;
">تسجيل
                            جديد</button>
                    </form>
                    <br>
                    <form action={{ route('login') }} method="GET">
                        <button class="btn btn-success" id="login_for_web2"
                            style="color: hsl(177, 82%, 27%);
              background: white;
              font-weight: bold;
              width:125px;
              height:50px

    width: fit-content;

              ";
                            ;> تسجيل الدخول</button>
                    </form>
                @endif

            </div>



        </div>
        <div class="h-100 d-lg-inline-flex align-items-center d-none">
            <a href="{{ route('home_page') }}" class="navbar-brand d-flex align-items-center">
                <h2 class="m-0 text-primary">
                    <img class="img-fluid me-2" src="{{ asset('logo/LogoMain.png') }}"alt="" style="width: 200px;">
                </h2>
            </a>
        </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script>
        function ahmed() {
            $("#navbarCollapse").toggle()
        }
    </script>


    <div x-cloak x-data="{ isOpen: false }" class="flex justify-between  p-4 bg-gray-50 print:hidden" dir="rtl">
        <a class="flex items-center" href="index.html">
            <img src="images/placeholder.webp" class="lg:h-20 h-16" alt="">
        </a>

        <!-- left header section -->
        <div class="flex items-center justify-between">
            <button @click="isOpen = !isOpen" type="submit" class="border-none  xl:hidden w-auto">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6  xl:hidden" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div class="hidden space-x-6 lg:inline-block">
                <nav class="hidden justify-between w-full xl:flex items-baseline">
                    <!-- menu links -->
                    <ul class="gap-8 mx-6 xl:flex">
                        <li class="h-2">
                            <a href="index.html">
                                <h6
                                    class="peer md:text-center relative mb-2 cursor-pointer  lg:hover:text-[#87438B] hover:border-b-2 hover:border-b-[#87438B] hover:pb-2 ease-in duration-300 ">
                                    الرئيسية</h6>
                            </a>
                        </li>


                        <li class="h-2">
                            <a href="applicants.html">
                                <h6
                                    class="peer md:text-center relative mb-2 cursor-pointer  lg:hover:text-[#87438B] hover:border-b-2 hover:border-b-[#87438B] hover:pb-2 ease-in duration-300 ">
                                    ملفات المعرض </h6>
                            </a>
                        </li>



                    </ul>
                    <!--end menu links -->
                    <!-- buttons -->
                    <div class="btn flex gap-3 text-white">
                        <button class="bg-dark-blue w-32 h-10">
                            <a href="index2.html" class="w-full h-6 leading-5"> تسجيل خروج</a>
                        </button>
                    </div>

                </nav>
                <!-- end desktop menu  -->
            </div>

            <!-- mobile navbar -->
            <div class="mobile-navbar print:hidden">
                <!-- navbar wrapper -->
                <div class="bg-dark-blue print:hidden text-white fixed left-0 p-5  shadow-xl top-0 w-full z-10"
                    x-show="isOpen" @click.away=" isOpen = false">

                    <div class="flex flex-col space-y-6">
                        <!-- menu links -->
                        <ul class="gap-8 xl:flex xl:space-x-6 mt-12">
                            <li class="xl:hidden z-90 fixed top-4 right-6">
                                <a class="lg:hidden " @click="isOpen = !isOpen">
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.9512 7.73181L7.05168 17.6313" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7.05078 7.73181L16.9503 17.6313" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </li>
                            <li class="lg:font-bold my-4">
                                <a href="index.html">
                                    <h4 class="cursor-pointer text-center">
                                        الرئيسية</h4>
                                </a>
                            </li>
                            <li class="lg:font-bold my-4">
                                <a href="applicants.html">
                                    <h4 class="cursor-pointer text-center">
                                        ملفات المعرض</h4>
                                </a>
                            </li>

                        </ul>
                        <!--end menu links -->
                        <div class="btn flex justify-center gap-3 text-white text-center">
                            <button class="bg-dark-blue w-32 h-10">
                                <a href="register.html" class="w-full h-6 "> تسجيل خروج</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end mobile navbar -->
        </div>
        <!-- right header section -->

    </div>

    <!--- start of first section-->
    <div style="margin: 1rem; text-align: center;">
        <table style="text-align: center; width: 100%;">
            <tbody>

                <tr>
                    <td class="bordrer-t-4">

                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <div class="visible-print text-center"
        style="display: flex;
    flex-direction: column;
    align-items: center;
    padding-top: 3rem;
">

        <h2 class="mt-4">
            <span class="abdosaad"> اسم الشركة</span>

            {{ Auth::user()->name }}
        </h2>
        <h2 class="mt-4  mb-2">
            <span class="abdosaad"> رقم الشركة</span>
            {{ Auth::user()->qr_code }}
        </h2>


        <img src="{{ asset('img/qrCode/' . Auth::user()->ahmed[0]->id . '.png') }}" </div>



    </div>
    <br>
    <style>
        .abdosaad {
            color: hsl(177, 82%, 27%);
            display: block;
        }
    </style>
    <hr>

    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>

    <!--- end of first section-->


    <!--- Start of second section-->
    <div style="margin: 1rem;">
        <table id="customers container-sm" style="text-align: right; width: 100%; ">
            <tr>
                <th style="text-align: right;" colspan="5">:تمت قراءة السيرة الذاتية للآتي
                </th>
            </tr>
            <tr class="text-center" style="direction: rtl;">
                <td class="text-center">
                    <!--                <button class="w-32 h-10 text-center" style="color: hsl(177, 82%, 27%);-->
    <!--background: white;-->
    <!--font-weight: bold;-->
    <!--">-->
                    <!--                    <p>تصدير</p>-->
                    <!--                </button>-->
                </td>
                <td class="text-center">
                    <!--                <button class="w-32 h-10 text-center" style="color: hsl(177, 82%, 27%);-->
    <!--background: white;-->
    <!--font-weight: bold;-->
    <!--">-->
                    <!--                    <p>فلتر</p>-->
                    <!--                </button>-->

                </td class="text-center">
                <td colspan="3">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" name="search" id="search" placeholder="البحث عن متقدم "
                                class="form-control W-25" onfocus="this.value=''">
                        </div>
                    </div>
                </td>

            </tr>
            <tbody id="search_list">
            </tbody>
            {{--  this Out Put For Ajax  --}}
        </table>

    </div>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <!--- End of second section-->

    <!--- Start of Third section-->
    <div style="margin: 1rem;">
        <table id="customers container-sm" style="text-align: right; width: 100%; ">

            <h5 style="text-align: right;" colspan="7">

                :المتقدمين للوظائف بالشركة

            </h5>

            <thead>
                <tr class="aliamin">
                    <th>السيرة الذاتية</th>
                    <th>رقم الجوال</th>
                    <th>التخصص</th>
                    <th>الموهل العلمي </th>
                    <th>اسم المتقدم</th>
                    <th>#</th>

                </tr>
                <style>
                    @media (max-width:700px) {
                        .aliamin {
                            display: none;
                        }
                    }
                </style>
            </thead>
            <tbody>
                @foreach ($User_companys as $User_company)
                    <tr class="border-t-2">
                        {{-- <td colspan="7" class="text-center">لا توجد نتائج. الرجاء توسيع نطاق البحث

                    </td> --}}

                        <td>
                            <a href="{{ asset('assets/file/' . $User_company->jop->CV) }}" target="_blank"
                                class="text-center" download=""
                                style="font-weight: 800;color: hsl(177, 82%, 27%);">
                                تحميل السيرة الذاتية
                            </a>
                        </td>
                        <td> {{ $User_company->jop->phone }}</td>

                        <td> {{ $User_company->jop->educational_specialization }}</td>
                        <td> {{ $User_company->jop->education }}</td>
                        <td> {{ $User_company->jop->name }}</td>
                        <td> {{ $loop->iteration }}</td>


                    </tr>
                @endforeach








            </tbody>


        </table>
    </div>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <!--- End of Third section-->
    <!--- Start of Fourth section-->
    <div style="margin: 1rem;">
        <table id="customers container-sm" style="text-align: right; width: 100%; direction: rtl; "
            class="table table-striped ">
            <tr>
<!--meeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeting-->
                <th style="text-align: right;">:تفاصيل الشركة</th>


            </tr>
            <tbody id="galal">
 <tr class="border-t-2">
        <th>الشركة</th>
        <th>لينك الاجتماع</th>
    </tr>
    <tr>
        <td>1</td>
        <td><button class="btn btn-success ms-2" onclick="showPopup()"
        style="color: hsl(177, 82%, 27%);
    background: white;
    font-weight: bold;
    width: fit-content;">إضافة اجتماع</button></td>
    </tr>
    <div id="popup" style="display:none; position:fixed; top:20%; left:50%; transform:translate(-50%, -50%); background-color:white; padding:20px; border:1px solid #ccc; z-index:1000;    direction: rtl;
">
    <label for="meetingLink">لينك الاجتماع:</label>
    <input type="url" id="meetingLink" name="meetingLink" style="    margin: auto;">
    <button style="color: hsl(177, 82%, 27%);
    background: white;
    font-weight: bold;
        margin-top: 1rem;
    " onclick="addMeetingLink()">تم</button>
</div>
<script>
function showPopup() {
    document.getElementById("popup").style.display = "block";
}

function addMeetingLink() {
    // هنا يمكنك إضافة الكود لتخزين الرابط أو إرساله إلى الخادم
    var link = document.getElementById("meetingLink").value;
    console.log(link); // مثال: طباعة الرابط في الكونسول

    // إغلاق النافذة المنبثقة
    document.getElementById("popup").style.display = "none";
}
</script>

                <style>
                    @media (max-width:700px) {
                        table {
                            display: flex;
                            direction: rtl;

                            flex-direction: column;
                        }

                        table tr {
                            display: flex;
                            flex-direction: column;
                            direction: rtl;

                        }

                        .border-t-2 {
                            display: flex;
                            flex-direction: column-reverse;
                        }
                    }
                </style>
            </tbody>
        </table>
    </div>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <!--- End of Fourth section-->


    <!--- Start of Fourth section-->
    <div style="margin: 1rem;">
        <table id="customers container-sm" style="text-align: right; width: 100%; direction: rtl; "
            class="table table-striped ">
            <tr>

                <th style="text-align: right;">:تفاصيل الشركة</th>


            </tr>
            <tbody id="galal">

                <tr class="border-t-2">
                    <td colspan="">تخصص الشركة</td>
                    <td>البريد الإلكتروني</td>
                    <td></td>
                    <td>الوصف</td>
                    <td>الوظائف المتاحة</td>
                </tr>
                <tr>
                    <td colspan="">{{ $company->work }}</td>
                    <td>{{ Auth::user()->email }}</td>
                    <td>{{ $company->qr_code }} </td>
                    <td>{{ $company->brief }} </td>
                    <td> {{ $company->AvailabilityWork }}</td>
                </tr>
                <style>
                    @media (max-width:700px) {
                        table {
                            display: flex;
                            direction: rtl;

                            flex-direction: column;
                        }

                        table tr {
                            display: flex;
                            flex-direction: column;
                            direction: rtl;

                        }

                        .border-t-2 {
                            display: flex;
                            flex-direction: column-reverse;
                        }
                    }
                </style>
            </tbody>
        </table>
    </div>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <!--- End of Fourth section-->

    <div style="margin: 1rem; direction: rtl;">
        <form id="specialistForm" method="POST"
            action="{{ route('store_specialist_roles', ['id' => Auth::user()->id]) }}" enctype="multipart/form-data">
            @csrf
            <table id="customers-container-sm" style="text-align: right; width: 100%;" class="table table-striped ">
                <thead>
                    <tr>
                        <th>التخصص المطلوب</th>
                        <th>عدد الأماكن المتاحة</th>
                        <th>المؤهلات المطلوبة</th>
                        <th>شروط التقديم للوظيفة</th>
                        <th>إجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dynamic rows will be inserted here -->
                </tbody>
            </table>
            <button type="button" id="add-specialist-btn" class="btn btn-primary" style="color: hsl(177, 82%, 27%);
    background: white;
    font-weight: bold;
    width: fit-content;">إضافة وظيفة</button>
            <button type="submit" class="btn btn-primary" style="color: hsl(177, 82%, 27%);
    background: white;
    font-weight: bold;
    width: fit-content;">تسجيل الوظائف </button>
        </form>
    </div>
    @if (isset($specialists))
        <div class="mt-4" dir="rtl">
            <h3>الوظائف المطلوبة </h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>التخصص المطلوب</th>
                        <th>عدد الأماكن المتاحة</th>
                        <th>	المؤهلات المطلوبة</th>
                        <th>شروط التقديم للوظيفة	</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($specialists as $specialist)
                        <tr>
                            <td>{{ $specialist->role }}</td>
                            <td>{{ $specialist->available_places }}</td>
                            <td>{{ $specialist->qualifications }}</td>
                            <td>{{ $specialist->job_conditions }}</td>
                            <td>
                                <!-- Edit Button, triggers modal -->
                                <button type="button" class="btn btn-primary edit-btn" data-toggle="modal"
                                    data-target="#editModal" data-specialist-id="{{ $specialist->id }}"
                                    data-role="{{ $specialist->role }}"
                                    data-available-places="{{ $specialist->available_places }}"
                                    data-qualifications="{{ $specialist->qualifications }}"
                                    data-job-conditions="{{ $specialist->job_conditions }}" style="margin-top: .75rem;
    background: #6060ff;
    width: fit-content; " onmouseover="this.style.color='white';" onmouseout="this.style.background='#6060ff';">تعديل</button>

                            </td>
                            <td>
                                <form id="delete-form-{{ $specialist->id }}"
                                    action="{{ route('specialist.destroy', $specialist->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger"
                                        onclick="confirmDelete({{ $specialist->id }})" 
                                        style="margin-top: .75rem;
    background: red;
    width: fit-content;">
                                        حذف
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    @endif
    {{-- @foreach ($specialists as $specialist) --}}
    <!-- Modal -->
    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" dir="rtl" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="editForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Specialist</h5>
                        <button type="button" style="height: auto;
    width: 2rem;
    font-size: 1.25rem;
    border: none;" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="editpop">
                        <!-- Form fields for editing, you'll dynamically populate these fields using JavaScript -->
                        <input type="text" id="role" name="role" class="form-control" placeholder="Role"
                            required>
                        <input type="number" id="availablePlaces" name="available_places" class="form-control"
                            placeholder="Available Places" required>
                        <input type="text" id="qualifications" name="qualifications" class="form-control"
                            placeholder="Qualifications" required>
                        <input type="text" id="jobConditions" name="job_conditions" class="form-control"
                            placeholder="Job Conditions" required>
                    </div>
                    <style>
                        #editpop input{
                            margin: auto;
    border-radius: 1rem;    margin-bottom: 1rem;

                        }
                    </style>
                    <div class="modal-footer">
    <!--                    <button type="button" -->
    <!--                  style="  color: hsl(177, 82%, 27%);-->
    <!--background: white;-->
    <!--font-weight: bold;-->
    <!--width: fit-content;"-->
    <!--class="btn btn-secondary" data-dismiss="modal">اغلاق</button>-->
                        <button 
    type="submit" class="btn btn-primary"   style="  color: hsl(177, 82%, 27%);
    background: white;
    font-weight: bold;
        width:100% !important;" 
        onmouseover="this.style.color='white'; this.style.backgroundColor='hsl(177, 82%, 27%)';" onmouseout="this.style.color='hsl(177, 82%, 27%)'; this.style.backgroundColor='white';">
    
    
    حفظ التعديلات
    </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- @endforeach --}}


    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var query = $(this).val();
                $.ajax({
                    url: 'search',
                    type: "GET",
                    data: {
                        'search': query
                    },
                    success: function(data) {
                        $('#search_list').html(data)
                    }
                });
                //end of ajax call
            });
        });
    </script>
    <script>
        function confirmDelete(specialistId) {
            if (confirm("Are you sure you want to delete this specialist?")) {
                document.getElementById('delete-form-' + specialistId).submit();
            }
        }

        document.querySelectorAll('.edit-btn').forEach(button => {
            button.addEventListener('click', function() {
                const specialistId = this.getAttribute('data-specialist-id');
                const role = this.getAttribute('data-role');
                const availablePlaces = this.getAttribute('data-available-places');
                const qualifications = this.getAttribute('data-qualifications');
                const jobConditions = this.getAttribute('data-job-conditions');

                // Populate the modal fields
                document.getElementById('role').value = role;
                document.getElementById('availablePlaces').value = availablePlaces;
                document.getElementById('qualifications').value = qualifications;
                document.getElementById('jobConditions').value = jobConditions;

                // Update the form action
                document.getElementById('editForm').action = `/specialists/${specialistId}`;
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tableBody = document.querySelector('#customers-container-sm tbody');
            const addButton = document.getElementById('add-specialist-btn');

            addButton.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent any default action

                const row = tableBody.insertRow();
                row.innerHTML = `
            <td><input type="text" name="specialistRole[]" class="form-control" placeholder="التخصص المطلوب"></td>
            <td><input type="number" name="availablePlaces[]" class="form-control" placeholder="عدد الأماكن المتاحة"></td>
            <td><input type="text" name="qualifications[]" class="form-control" placeholder="المؤهلات المطلوبة"></td>
            <td><input type="text" name="jobConditions[]" class="form-control" placeholder="شروط التقديم للوظيفة"></td>
            <td><button type="button" class="btn btn-danger remove-btn" onclick="removeRow(this)" style="margin-top: .75rem;
    background: red;
    width: fit-content;">حذف</button></td>
        `;
            });
        });

        function removeRow(button) {
            button.closest('tr').remove();
        }
    </script>

</body>

</html>
