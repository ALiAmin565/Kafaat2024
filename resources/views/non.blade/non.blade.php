<!-- @extends('master.master') -->


<!-- @section('container') -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>كفاءات تقنية</title>
    <meta http-equiv="refresh" content="7200">
    <!-- Styles -->
    <!-- <link rel="stylesheet" href="css\app.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    <script src="js/app.js" defer></script>
    <!-- <style>
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
    </style> -->

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

</head>

<body class="">

<!-- @include('include.nav') -->


    <!--- start of first section-->
    <!-- <div style="margin: 1rem; text-align: center;">
        <table style="text-align: center; width: 100%;">
            <tbody>

                <tr>
                    <td class="bordrer-t-4">
                        <section class="flex d-flex flex-row-reverse text-center">

                            <button class="w-32 h-10" style="margin:1rem;">
                                إضافة متقدم
                            </button>
                            <div class="d-inline-flex p-2 " style=": 1px solid grey;">
                                <p>عدد الباحثين عن عمل</p>
                                <br>
                                <span class="">0</span>
                            </div>

                            <div class="d-inline-flex p-2" style=": 1px solid grey;">
                                <p> عدد ورش العمل </p>
                                <br> <span class="">0</span>
                            </div>
                        </section>
                    </td>
                </tr>
            </tbody>
        </table>
    </div> -->

    <hr>
    <hr>
    <!-- <div class="visible-print text-center">
                            {!! QrCode::size(250)->generate(Auth::user()->qr_code) !!}

                            <h2 class="mt-4">{{ Auth::user()->qr_code }}</h2>
                        </div>
    <hr>
    <hr> -->
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
    <!-- <div style="margin: 1rem;">
        <table id="customers container-sm" style="text-align: right; width: 100%; ">
            <tr>
                <th style="text-align: right;" colspan="5">:تمت قراءة السيرة الذاتية للآتي
                </th>
            </tr>
            <tr class="text-center">
                <td class="text-center">
                    <button class="w-32 h-10 text-center">
                        <p>تصدير</p>
                    </button>
                </td>
                <td class="text-center">
                    <button class="w-32 h-10 text-center">
                        <p>فلتر</p>
                    </button>

                </td class="text-center">
                <td colspan="3">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="search" id="search" placeholder="ادخل اسم مزود الخدمة"
                                class="form-control W-25" onfocus="this.value=''">
                        </div>
                    </div>
                </td>

            </tr>
            <tbody id="search_list">
            </tbody>
            {{--  this Out Put For Ajax  --}}
        </table>

    </div> -->
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
    <!-- <div style="margin: 1rem;">
        <table id="customers container-sm" style="text-align: right; width: 100%; ">

            <h5 style="text-align: right;" colspan="7">:المتقدمين على ورش العمل الخاصة بالشركة

            </h5>

            <thead>
                <tr>
                    <th>السيرة الذاتية</th>
                    <th>رقم الجوال</th>
                    <th>التخصص</th>
                    <th>الموهل العلمي </th>

                    <th>اسم المتقدم</th>
                    <th>#</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($User_companys as $User_company)
                    <tr class="border-t-2">
                        {{-- <td colspan="7" class="text-center">لا توجد نتائج. الرجاء توسيع نطاق البحث

                    </td> --}}

                        <td>
                            <a href="{{ asset('assets/file/' . $User_company->jop->CV) }}" target="_blank"
                                class="text-center">
                                <svg class="ml-2" width="33" height="33" viewBox="0 0 33 33"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.525391" width="32.4746" height="32.3788" rx="10"
                                        fill="white">
                                    </rect>
                                    <path
                                        d="M18.1816 9.82922V12.6559C18.1816 12.8434 18.2563 13.0231 18.3892 13.1556C18.5222 13.2882 18.7024 13.3626 18.8904 13.3626H21.7255"
                                        stroke="#60A5FA" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round">
                                    </path>
                                    <path
                                        d="M20.308 22.5495H13.2203C12.8443 22.5495 12.4838 22.4005 12.2179 22.1355C11.9521 21.8704 11.8027 21.5109 11.8027 21.1361V11.2426C11.8027 10.8677 11.9521 10.5082 12.2179 10.2432C12.4838 9.97813 12.8443 9.82922 13.2203 9.82922H18.1817L21.7255 13.3626V21.1361C21.7255 21.5109 21.5762 21.8704 21.3103 22.1355C21.0445 22.4005 20.6839 22.5495 20.308 22.5495Z"
                                        stroke="#60A5FA" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round">
                                    </path>
                                    <path d="M14.6387 14.0693H15.3474" stroke="#3B82F6" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M14.6387 16.896H18.8913" stroke="#3B82F6" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M14.6387 19.7228H18.8913" stroke="#3B82F6" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </td>
                        <td> {{ $User_company->jop->phone }}</td>

                        <td> {{ $User_company->jop->educational_specialization }}</td>
                        <td> {{ $User_company->jop->education }}</td>
                        <td> {{ $User_company->jop->name }}</td>



                    </tr>
                @endforeach








            </tbody>


        </table>
    </div> -->
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


    <!-- - Start of Fourth section -->
    <div style="margin: 1rem;">
        <table id="customers container-sm" style="text-align: right; width: 100%; " class="table table-striped ">
            <tr>
                <th style="text-align: left;" colspan="1" rowspan="2"></th>
                <th style="text-align: left;" colspan="3" rowspan="2">

                </th>
                <th style="text-align: right;" colspan="3" rowspan="2">:تفاصيل الشركة</th>


            </tr>

            <tr>

            </tr>
            <tbody>

                <tr class="border-t-2">
                    <td colspan="4">تخصص الشركة</td>
                    <td>البريد الإلكتروني</td>
                    <td>رقم الجوال</td>
                    <td>عنوان الشركة
                    </td>

                </tr>
                <tr>
                    <td colspan="4">{{ $company->work }}</td>
                    <td>{{ Auth::user()->email }}</td>
                    <td>{{ $company->qr_code }} </td>
                    <td>{{ $company->place }}
                    </td>

                </tr>
                <tr class="border-t-2">
                    <td colspan="7">الوصف</td>
                </tr>
                <tr>
                    <td colspan="7">{{ $company->brief }} </td>
                </tr>
                <tr class="border-t-2">
                    <td colspan="7">تفاصيل المكان</td>
                </tr>
                <tr>
                    <td colspan="7">{{ $company->place }} </td>
                </tr>
                <tr class="border-t-2">
                    <td colspan="7">الوظائف المتاحة</td>
                </tr>
                <tr>
                    <td colspan="7"> {{ $company->AvailabilityWork }}</td>
                </tr>
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
    <!-- <div style="margin: 1rem;">
        <table id="customers container-sm" style="text-align: right; width: 100%; " class="table table-striped ">
            <form method="POST" action={{ route('NewUpdate', Auth::user()->id) }} enctype="multipart/form-data">
                @csrf
                <tr>
                    <th style="text-align: left;" colspan="1" rowspan="2"></th>
                    <th style="text-align: left;" colspan="3" rowspan="2">
                        <button class="w-32 h-10" type="submit" style="margin:1rem;background-color:#88b9dc;">
                            تعديل بيانات الشركة
                        </button>

                    </th>



                </tr>

                <tr>

                </tr>
                <tbody>

                    <tr class="border-t-2">

                        <td colspan="7">تخصص الشركة</td>
                        <td>الوظائف المتاحة</td>
                        <td> المكان</td>
                    </tr>
                    <tr>

                        <td colspan="7">
                            <div class="input-group mb-3" dir="rtl">

                                <input type="text" name="specification" class="form-control" placeholder="التخصص"
                                    aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </td>
                        <td>
                            <div class="input-group mb-3" dir="rtl">

                                <textarea name="workAvailable" id="" cols="30" class="form-control"></textarea>
                                {{-- <input type="text" name="workAvailable" class="form-control"
                                    placeholder="الوظائف" aria-label="Username" aria-describedby="basic-addon1"> --}}
                            </div>
                        </td>
                        <td colspan="3">
                            <div class="input-group mb-3" dir="rtl">
                                <input type="text" name="place" class="form-control" placeholder="ادخل المكان "
                                    aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </td>
                    </tr>


            </form>
            </tbody>
        </table>
    </div> -->

    <!-- Template Javascript -->
    <!-- <script src="js/main.js"></script> -->

    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script> -->
    <!-- <script>
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
    </script> -->

</body>

</html>
