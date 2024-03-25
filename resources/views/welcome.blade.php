@extends('master.master')

@section('container')
    @if (session()->has('massage'))
        <div class="alert alert-success">
            {{ session()->get('massage') }}
        </div>
    @endif
    <style>
        #goo:hover {
            color: red
        }

    </style>

<link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet"></link>
<!-- Header Start -->
    <div class="container-fluid hero-header ">
        <div class="container py-5" style=" margin:0%; ">
            <div class="row g-5 align-items-center"     dir="rtl">
                <div class="col-lg-6 ">



                    @foreach ($events as $event)
                        <img class="img-fluid " src="{{ asset('Event/' . $event->img) }}" alt="" srcset=""
                            width="450px">
                </div>


    <!--            <div class="col-lg-6" dir="rtl">-->
    <!--                <h2 class=" mb-3 animated slideInDown" style="    color: hsl(177, 82%, 27%);-->
    <!--font-weight: 800;">{{ $event->name }}-->
    <!--                </h2>-->
    <!--                <p class="animated slideInDown mt-4" style="     color: hsl(0deg 0% 59%);-->
    <!--font-weight: 700;">{{ $event->descrption }}</p>-->
    <!--                </p>-->
    <!--                <br>-->
    <!--                <a href="{{asset('assets/file/'.$event->pdfFile)}}" class="btn btn-primary py-3 px-4 animated slideInDown"-->
    <!--                style="color: hsl(177, 82%, 27%);-->
    <!--      background: white;-->
    <!--      font-weight: bold;"-->
    <!--                target="blank">-->
    <!--                    الملف التعريفي  </a>-->
    <!--            </div>-->
    <div class="col-lg-6 animatedUpDown" dir="rtl">
  <h2 class="mb-3 animated slideInDown" style="color: hsl(177, 82%, 27%); font-weight: 800;">معرض كفاءات تقنية للتوظيف</h2>
  <p class="animated slideInDown mt-4" style="color: hsl(0deg 0% 59%); font-weight: 700;">برعاية سمو أمير منطقة عسير الأمير تركي بن طلال بن عبدالعزيز تنظم الإدارة العامة للتدريب التقني المهني بمنطقة عسير معرض كفاءات تقنية للتوظيف. وتعكـس رعايـة سموه للمعرض مــدى الدعــم الكبير الــذي يوليــه لشباب وشابات المنطقة وحرصه على التحاقهم بأفضل الفرص الوظيفية ليساهموا في تحقيق استراتيجيتها بطموحهم ومهاراتهم.</p>
  <br>
  <a href="https://invoices.27lashabab.com/assets/file/1675762041.pdf" class="btn btn-primary py-3 px-4 animated slideInDown" style="color: hsl(177, 82%, 27%); background: white; font-weight: bold;" target="blank">الملف التعريفي</a>
</div>
<style>
    @keyframes moveUpDown {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-20px);
  }
}

.animatedUpDown {
  animation: moveUpDown 2s ease-in-out infinite;
}

</style>
            </div>
        </div>
    </div>
    </div>
    <!-- Header End -->
    <!--Site-->
    <section
        class=" md:flex justify-around mx-5 lg:-mt-10 md  bg-grey-04 xl:mx-64 sm:mx-24 lg:h-32 space-y-6 md:space-y-0	py-10  p-5 rounded-xl"
        style="background: white;direction: rtl;"
        >
        <div class="text-dark-blue font-bold flex ">
            <a href="{{ $event->location }}">
                <svg width="30" height="51" viewBox="0 0 30 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M23.0874 13.9332C23.0874 18.1554 19.4679 21.5773 14.9994 21.5773C10.531 21.5773 6.91138 18.1554 6.91138 13.9332C6.91138 9.71112 10.531 6.28699 14.9994 6.28699C19.4679 6.28699 23.0874 9.71112 23.0874 13.9332Z"
                        fill="#0158DB" />
                    <path
                        d="M14.9995 0C3.47067 0 -3.73513 11.7985 2.02807 21.2391L14.9995 42.4782L27.9708 21.2391C29.3633 18.9579 30 16.5391 30 14.1812C30 6.78515 23.7408 0 14.9995 0ZM14.9995 23.9126C9.17903 23.9126 4.44352 19.4357 4.44352 13.9332C4.44352 8.43072 9.17903 3.95387 14.9995 3.95387C20.8199 3.95387 25.5554 8.43072 25.5554 13.9332C25.5554 19.4357 20.8199 23.9126 14.9995 23.9126Z"
                        fill="url(#paint0_linear_31_207)" />
                    <path
                        d="M23.0874 13.9332C23.0874 18.1554 19.4679 21.5773 14.9994 21.5773C10.531 21.5773 6.91138 18.1554 6.91138 13.9332C6.91138 9.71112 10.531 6.28699 14.9994 6.28699C19.4679 6.28699 23.0874 9.71112 23.0874 13.9332Z"
                        fill="#F56AA1" />
                    <path
                        d="M23.0874 13.9332C23.0874 18.1554 19.4679 21.5773 14.9994 21.5773C10.531 21.5773 6.91138 18.1554 6.91138 13.9332C6.91138 9.71112 10.531 6.28699 14.9994 6.28699C19.4679 6.28699 23.0874 9.71112 23.0874 13.9332Z"
                        fill="url(#paint1_linear_31_207)" />
                    <path
ff                        d="M14.9994 6.28949C10.5334 6.28949 6.91138 9.71137 6.91138 13.9358C6.91138 18.1579 10.531 21.5798 14.9994 21.5798C19.4679 21.5798 23.0874 18.1579 23.0874 13.9358C23.0874 9.71137 19.4655 6.28949 14.9994 6.28949ZM14.9994 20.7141C11.0436 20.7141 7.82464 17.6732 7.82464 13.9335C7.82464 10.1938 11.0436 7.1506 14.9994 7.1506C18.9552 7.1506 22.1718 10.1938 22.1718 13.9335C22.1718 17.6732 18.9552 20.7141 14.9994 20.7141Z"
                        fill="#F56AA1" />
                    <path
                        d="M14.9994 6.28949C10.5334 6.28949 6.91138 9.71137 6.91138 13.9358C6.91138 18.1579 10.531 21.5798 14.9994 21.5798C19.4679 21.5798 23.0874 18.1579 23.0874 13.9358C23.0874 9.71137 19.4655 6.28949 14.9994 6.28949ZM14.9994 20.7141C11.0436 20.7141 7.82464 17.6732 7.82464 13.9335C7.82464 10.1938 11.0436 7.1506 14.9994 7.1506C18.9552 7.1506 22.1718 10.1938 22.1718 13.9335C22.1718 17.6732 18.9552 20.7141 14.9994 20.7141Z"
                        fill="url(#paint2_linear_31_207)" />
                    <path
                        d="M14.9994 6.28949C10.5334 6.28949 6.91138 9.71137 6.91138 13.9358C6.91138 18.1579 10.531 21.5798 14.9994 21.5798C19.4679 21.5798 23.0874 18.1579 23.0874 13.9358C23.0874 9.71137 19.4655 6.28949 14.9994 6.28949ZM14.9994 20.7141C11.0436 20.7141 7.82464 17.6732 7.82464 13.9335C7.82464 10.1938 11.0436 7.1506 14.9994 7.1506C18.9552 7.1506 22.1718 10.1938 22.1718 13.9335C22.1718 17.6732 18.9552 20.7141 14.9994 20.7141Z"
                        fill="#F56AA1" />
                    <path
                        d="M14.9994 6.28949C10.5334 6.28949 6.91138 9.71137 6.91138 13.9358C6.91138 18.1579 10.531 21.5798 14.9994 21.5798C19.4679 21.5798 23.0874 18.1579 23.0874 13.9358C23.0874 9.71137 19.4655 6.28949 14.9994 6.28949ZM14.9994 20.7141C11.0436 20.7141 7.82464 17.6732 7.82464 13.9335C7.82464 10.1938 11.0436 7.1506 14.9994 7.1506C18.9552 7.1506 22.1718 10.1938 22.1718 13.9335C22.1718 17.6732 18.9552 20.7141 14.9994 20.7141Z"
                        fill="url(#paint3_linear_31_207)" />
                    <path
                        d="M23.0874 13.9332C23.0874 18.1554 19.4679 21.5773 14.9994 21.5773C10.531 21.5773 6.91138 18.1554 6.91138 13.9332C6.91138 9.71112 10.531 6.28699 14.9994 6.28699C19.4679 6.28699 23.0874 9.71112 23.0874 13.9332Z"
                        fill="#F56AA1" />
                    <path
                        d="M23.0874 13.9332C23.0874 18.1554 19.4679 21.5773 14.9994 21.5773C10.531 21.5773 6.91138 18.1554 6.91138 13.9332C6.91138 9.71112 10.531 6.28699 14.9994 6.28699C19.4679 6.28699 23.0874 9.71112 23.0874 13.9332Z"
                        fill="url(#paint4_linear_31_207)" />
                    <g opacity="0.51">
                        <path
                            d="M14.9995 50.5032C20.2104 50.5032 24.4347 49.6403 24.4347 48.5758C24.4347 47.5114 20.2104 46.6485 14.9995 46.6485C9.78853 46.6485 5.56421 47.5114 5.56421 48.5758C5.56421 49.6403 9.78853 50.5032 14.9995 50.5032Z"
                            fill="#CCCCCC" />
                    </g>
                    <defs>
                        <linearGradient id="paint0_linear_31_207" x1="-11.115" y1="2.40749" x2="0.23896"
                            y2="47.7343" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#3BC3E1" />
                            <stop offset="0.491416" stop-color="#1C32FF" />
                            <stop offset="0.984375" stop-color="#FF6DCE" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_31_207" x1="3.4185" y1="3.39172" x2="14.6055"
                            y2="24.8867" gradientUnits="userSpaceOnUse">
                            <stop offset="0.181437" stop-color="#FAFF01" />
                            <stop offset="0.644519" stop-color="#FE007A" />
                            <stop offset="1" stop-color="#FF4848" />
                        </linearGradient>
                        <linearGradient id="paint2_linear_31_207" x1="3.4185" y1="3.39423" x2="14.6055"
                            y2="24.8892" gradientUnits="userSpaceOnUse">
                            <stop offset="0.181437" stop-color="#FAFF01" />
                            <stop offset="0.644519" stop-color="#FE007A" />
                            <stop offset="1" stop-color="#FF4848" />
                        </linearGradient>
                        <linearGradient id="paint3_linear_31_207" x1="3.4185" y1="3.39423" x2="14.6055"
                            y2="24.8892" gradientUnits="userSpaceOnUse">
                            <stop offset="0.181437" stop-color="#FAFF01" />
                            <stop offset="0.644519" stop-color="#FE007A" />
                            <stop offset="1" stop-color="#FF4848" />
                        </linearGradient>
                        <linearGradient id="paint4_linear_31_207" x1="3.4185" y1="3.39172" x2="14.6055"
                            y2="24.8867" gradientUnits="userSpaceOnUse">
                            <stop offset="0.181437" stop-color="#FAFF01" />
                            <stop offset="0.644519" stop-color="#FE007A" />
                            <stop offset="1" stop-color="#FF4848" />
                        </linearGradient>
                    </defs>
                </svg>
            </a>
            <a href="{{ $event->location }}">
                <p class="px-4 " style=" color: black;    font-weight: bolder;"> المكان
                    <br><span class="text-grey"> <a href="{{ $event->location }}" style=" color: black;    font-weight: bolder;"> {{ $event->place }}</a></span>
                </p>
            </a>
        </div>
        <div class="text-dark-blue font-bold flex ">
            <svg width="50" height="51" viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M25.9208 50.5032C20.6681 50.5032 15.6738 48.8821 11.4846 45.8167C7.43198 42.8506 4.38324 38.6317 2.90234 33.933L3.85151 33.6471C6.84808 43.1486 15.716 49.5339 25.9208 49.5339C38.65 49.5339 49.0063 39.4338 49.0063 27.0195C49.0063 14.6052 38.65 4.50513 25.9208 4.50513V3.53583C39.1991 3.53583 50.0002 14.0697 50.0002 27.0195C49.9977 39.9693 39.1966 50.5032 25.9208 50.5032Z"
                    fill="#0158DB" />
                <path d="M2.33811 27.0195L7.96601 35.8741L3.59289 34.2723L0 37.1851L2.33811 27.0195Z" fill="#0158DB" />
                <path
                    d="M25.9181 9.80475C16.1705 9.80475 8.2666 17.5131 8.2666 27.0195C8.2666 36.5283 16.1705 44.2343 25.9181 44.2343C35.6681 44.2343 43.5695 36.5283 43.5695 27.0195C43.5695 17.5131 35.6681 9.80475 25.9181 9.80475ZM32.7883 34.7812L23.1948 28.362V13.19H25.6795V27.0874L34.1947 32.7844L32.7883 34.7812Z"
                    fill="#0158DB" />
                <path
                    d="M25.9181 9.80475C16.1705 9.80475 8.2666 17.5131 8.2666 27.0195C8.2666 36.5283 16.1705 44.2343 25.9181 44.2343C35.6681 44.2343 43.5695 36.5283 43.5695 27.0195C43.5695 17.5131 35.6681 9.80475 25.9181 9.80475ZM32.7883 34.7812L23.1948 28.362V13.19H25.6795V27.0874L34.1947 32.7844L32.7883 34.7812Z"
                    fill="url(#paint0_linear_31_234)" />
                <path
                    d="M15.6371 4.23568C16.4367 3.45591 16.4367 2.19165 15.6371 1.41188C14.8376 0.632103 13.5412 0.632103 12.7417 1.41188C11.9421 2.19165 11.9421 3.45592 12.7417 4.2357C13.5412 5.01547 14.8376 5.01546 15.6371 4.23568Z"
                    fill="#0158DB" />
                <path
                    d="M10.3041 12.2692C10.8969 12.2692 11.3775 11.8006 11.3775 11.2224C11.3775 10.6442 10.8969 10.1755 10.3041 10.1755C9.71129 10.1755 9.23071 10.6442 9.23071 11.2224C9.23071 11.8006 9.71129 12.2692 10.3041 12.2692Z"
                    fill="#F7528E" />
                <defs>
                    <linearGradient id="paint0_linear_31_234" x1="3.09839" y1="11.3944" x2="3.39116"
                        y2="50.0036" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#3BC3E1" />
                        <stop offset="0.491416" stop-color="#1C32FF" />
                        <stop offset="0.984375" stop-color="#FF6DCE" />
                    </linearGradient>
                </defs>
            </svg>
            <p class="px-4 " style=" color: black;font-weight: bolder;">بداية الملتقي
                <br><span class="text-grey"id="time_database" style=" color: black;font-weight: bolder;"> {{ $event->start_date }}</span>
            </p>

        </div>
        <div class="text-dark-blue font-bold flex ">
            <svg width="50" height="51" viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M25.9208 50.5032C20.6681 50.5032 15.6738 48.8821 11.4846 45.8167C7.43198 42.8506 4.38324 38.6317 2.90234 33.933L3.85151 33.6471C6.84808 43.1486 15.716 49.5339 25.9208 49.5339C38.65 49.5339 49.0063 39.4338 49.0063 27.0195C49.0063 14.6052 38.65 4.50513 25.9208 4.50513V3.53583C39.1991 3.53583 50.0002 14.0697 50.0002 27.0195C49.9977 39.9693 39.1966 50.5032 25.9208 50.5032Z"
                    fill="#0158DB" />
                <path d="M2.33811 27.0195L7.96601 35.8741L3.59289 34.2723L0 37.1851L2.33811 27.0195Z" fill="#0158DB" />
                <path
                    d="M25.9181 9.80475C16.1705 9.80475 8.2666 17.5131 8.2666 27.0195C8.2666 36.5283 16.1705 44.2343 25.9181 44.2343C35.6681 44.2343 43.5695 36.5283 43.5695 27.0195C43.5695 17.5131 35.6681 9.80475 25.9181 9.80475ZM32.7883 34.7812L23.1948 28.362V13.19H25.6795V27.0874L34.1947 32.7844L32.7883 34.7812Z"
                    fill="#0158DB" />
                <path
                    d="M25.9181 9.80475C16.1705 9.80475 8.2666 17.5131 8.2666 27.0195C8.2666 36.5283 16.1705 44.2343 25.9181 44.2343C35.6681 44.2343 43.5695 36.5283 43.5695 27.0195C43.5695 17.5131 35.6681 9.80475 25.9181 9.80475ZM32.7883 34.7812L23.1948 28.362V13.19H25.6795V27.0874L34.1947 32.7844L32.7883 34.7812Z"
                    fill="url(#paint0_linear_31_234)" />
                <path
                    d="M15.6371 4.23568C16.4367 3.45591 16.4367 2.19165 15.6371 1.41188C14.8376 0.632103 13.5412 0.632103 12.7417 1.41188C11.9421 2.19165 11.9421 3.45592 12.7417 4.2357C13.5412 5.01547 14.8376 5.01546 15.6371 4.23568Z"
                    fill="#0158DB" />
                <path
                    d="M10.3041 12.2692C10.8969 12.2692 11.3775 11.8006 11.3775 11.2224C11.3775 10.6442 10.8969 10.1755 10.3041 10.1755C9.71129 10.1755 9.23071 10.6442 9.23071 11.2224C9.23071 11.8006 9.71129 12.2692 10.3041 12.2692Z"
                    fill="#F7528E" />
                <defs>
                    <linearGradient id="paint0_linear_31_234" x1="3.09839" y1="11.3944" x2="3.39116"
                        y2="50.0036" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#3BC3E1" />
                        <stop offset="0.491416" stop-color="#1C32FF" />
                        <stop offset="0.984375" stop-color="#FF6DCE" />
                    </linearGradient>
                </defs>
            </svg>
            <p class="px-4 " style=" color: black;    font-weight: bolder;">
                نهاية الملتقي
                <br><span class="text-grey " style=" color: black;font-weight: bolder;"> {{ $event->end_date }}</span>
            </p>

        </div>
         <div class="text-dark-blue font-bold flex ">
            <svg width="50" height="51" viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M25.9208 50.5032C20.6681 50.5032 15.6738 48.8821 11.4846 45.8167C7.43198 42.8506 4.38324 38.6317 2.90234 33.933L3.85151 33.6471C6.84808 43.1486 15.716 49.5339 25.9208 49.5339C38.65 49.5339 49.0063 39.4338 49.0063 27.0195C49.0063 14.6052 38.65 4.50513 25.9208 4.50513V3.53583C39.1991 3.53583 50.0002 14.0697 50.0002 27.0195C49.9977 39.9693 39.1966 50.5032 25.9208 50.5032Z"
                    fill="#0158DB" />
                <path d="M2.33811 27.0195L7.96601 35.8741L3.59289 34.2723L0 37.1851L2.33811 27.0195Z" fill="#0158DB" />
                <path
                    d="M25.9181 9.80475C16.1705 9.80475 8.2666 17.5131 8.2666 27.0195C8.2666 36.5283 16.1705 44.2343 25.9181 44.2343C35.6681 44.2343 43.5695 36.5283 43.5695 27.0195C43.5695 17.5131 35.6681 9.80475 25.9181 9.80475ZM32.7883 34.7812L23.1948 28.362V13.19H25.6795V27.0874L34.1947 32.7844L32.7883 34.7812Z"
                    fill="#0158DB" />
                <path
                    d="M25.9181 9.80475C16.1705 9.80475 8.2666 17.5131 8.2666 27.0195C8.2666 36.5283 16.1705 44.2343 25.9181 44.2343C35.6681 44.2343 43.5695 36.5283 43.5695 27.0195C43.5695 17.5131 35.6681 9.80475 25.9181 9.80475ZM32.7883 34.7812L23.1948 28.362V13.19H25.6795V27.0874L34.1947 32.7844L32.7883 34.7812Z"
                    fill="url(#paint0_linear_31_234)" />
                <path
                    d="M15.6371 4.23568C16.4367 3.45591 16.4367 2.19165 15.6371 1.41188C14.8376 0.632103 13.5412 0.632103 12.7417 1.41188C11.9421 2.19165 11.9421 3.45592 12.7417 4.2357C13.5412 5.01547 14.8376 5.01546 15.6371 4.23568Z"
                    fill="#0158DB" />
                <path
                    d="M10.3041 12.2692C10.8969 12.2692 11.3775 11.8006 11.3775 11.2224C11.3775 10.6442 10.8969 10.1755 10.3041 10.1755C9.71129 10.1755 9.23071 10.6442 9.23071 11.2224C9.23071 11.8006 9.71129 12.2692 10.3041 12.2692Z"
                    fill="#F7528E" />
                <defs>
                    <linearGradient id="paint0_linear_31_234" x1="3.09839" y1="11.3944" x2="3.39116"
                        y2="50.0036" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#3BC3E1" />
                        <stop offset="0.491416" stop-color="#1C32FF" />
                        <stop offset="0.984375" stop-color="#FF6DCE" />
                    </linearGradient>
                </defs>
            </svg>
            <p class="px-4 " style=" color: black;font-weight: bolder;">
                الساعة
                <br><span class="text-grey"id="time_database" style=" color: black;font-weight: bolder;"> {{ $event->startEvent }}</span>
            </p>

        </div>
        {{-- end foreach event --}}
        @endforeach
    </section>
    <!--End Site-->

    <!-- Timer Start -->
    <div class="container-xxl  ">
        <div class="container py-5">
            <div class="row g-3">
            <div class="col-4 col-md-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="text-center p-3">
                        {{-- mins --}}
                        <h1 class="mb-0" id="mins" style="color: #7c7c7c;"></h1>
                        <span class="text-primary " style="font-size: 1.75rem;">دقائق</span>
                    </div>
                </div>
                <div class="col-4 col-md-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="text-center p-3" >
                        {{-- ---------------hours---------  --}}
                        <h1 class="mb-0" id="hours" style="color: #7c7c7c;"></h1>
                        <span class="text-primary" style="font-size: 1.75rem;">ساعات </span>
                    </div>
                </div>
                <div class="col-4 col-md-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center p-3">
                        {{-- days --}}
                        <h1 class="mb-0" id="days" style="color: #7c7c7c;"></h1>
                        <span class="text-primary"
                        style="font-size: 1.75rem;">ايام</span>
                    </div>
                </div>



                <!-- <div class="col-3 col-md-4 wow fadeIn" data-wow-delay="0.7s">
                    <div class="text-center p-3">
                        <h1 class="mb-0" id="secs" style="color: #7c7c7c;"></h1>
                        <span class="text-primary" style="font-size: 1.75rem;">ثواني</span>
                    </div>
                </div> -->

            </div>
        </div>
        <!-- Timer End -->

        <div class="container-fluid hero-header  ">
            <div class="container py-5" style="margin:0%; ">
                <div class="row g-5 align-items-center">




                    <div class="col-lg-6 animatedUpDown" dir="rtl">
                        <h2 class=" mb-3 animated slideInDown" style="color: hsl(177, 82%, 27%);
    font-weight: 800;">{{ $section2->title }}
                        </h2>
                        <p class="animated slideInDown mt-4" style="color: hsl(0deg 0% 59%);
    font-weight: 700;">{{ $section2->descrption }}</p>
                        </p>
                        <br>
                       
                    </div>
                    <div class="col-lg-6 animated fadeIn ">
                        <img class="img-fluid animated pulse infinite" id="hh" style="animation-duration: 3s"
                            src="{{ asset('SecTwo/' . $section2->img) }}" alt="" srcset="" width="450px">
<style>
    @media (max-width:1000px){
        #hh {
            display: none;
        }
    }
</style>
                    </div>
                </div>
            </div>
        </div>

        <!-- About End -->

        <div class="container-fluid hero-header ">
            <div class="container py-5" style="margin:0%; ">
                <div class="row g-5 align-items-center">

                    <div class="col-lg-6 animated fadeIn">
                        <img class="img-fluid " style="animation-duration: 3s"
                            src="{{ asset('SecThree/' . $section3->img) }}" alt="" srcset=""
                            width="450px">

                    </div>


                    <div class="col-lg-6" dir="rtl">
                        <h2 class=" mb-3 animated slideInDown" style="color: hsl(177, 82%, 27%);
    font-weight: 800;"> {{ $section3->title }}</h2>
                        <p class="animated slideInDown mt-4" style="color: hsl(0deg 0% 59%);
    font-weight: 700;">{{ $section3->descrption }}</p>
                        </p>
                        <br>
                    
                    </div>
                </div>
            </div>
        </div>



        <!-- Header End -->

        <div>

        </div>
                {{-- ------------------------------------Sponcers-------------------------- --}}

        <section id="clients" class="clients ">
            <div class="container" data-aos="fade-up">

                <div class="section-title">

                    <p style="color: hsl(177, 82%, 27%);">
                    {{$setting->artical}}
                   </p>
                </div>

                <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper align-items-center">
                        @foreach ($logo as $value)
                            <div class="swiper-slide">
                                <img src={{ asset('assets/img/clients/' . $value->image) }} alt="{{ $value->alt }}"
                                    width="100px" height="80px">
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </section><!-- End Clients Section -->

        {{-- ------------------------------------Sponcers-------------------------- --}}
        <!-- Company Start -->
        <div class="container-xxl py-5 my-5">
            <div class="container py-5">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-6" style="color: hsl(177, 82%, 27%);
    font-weight: 800;    margin:revert;">   {{$setting->title_company}} </h1>
                  
                </div>




                <div class="row g-4">
                    @foreach ($subscrips as $subscripss)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item  " style="    background: white;
    border: 2px solid #dadede;">
                                <img class="img-fluid mb-4"
                                   id="saad" src="{{ asset('compoany/' . $subscripss->Company_subscrip->img) }}" alt=""
                                style = "    height:64%;">
                                
                                <style>
                                    #saad{
                                        width:100% ;height:170px;
                                    }
                                    @media (min-width:900px){
                                        #saad{
                                                width: 153%;
                                        }
                                    }
                                </style>
                              <div style="    text-align: center;    overflow-wrap: break-word;
    height: 10%;">
                                <h5 class="mb-3"  style="color: hsl(177, 82%, 27%);    font-weight: 900 !important;    font-size: 1.5rem !important;">{{ $subscripss->Company_subscrip->name }}</h5>
    <!--                            <p  style="    color: hsl(0deg 0% 59%);-->
    <!--font-weight: 700;">{{ $subscripss->Company_subscrip->representive }}-->
    <!--                            </p>-->
                                </div>
                                @php

                                    $id = $subscripss->Company_subscrip->id;

                                @endphp
                                <br>
                                <form action="{{ route('get_company.show', $id) }}" method="get"
                                    id="GOFor_get_subscrip"  style="display: flex;
    align-content: center;
    justify-content: center;">



                                    @if (Auth::user())
                                        @php
                                            $auth_id = time() . '.' . Auth::user()->id;
                                            $company_id = time() . '.' . $subscripss->Company_subscrip->id;
                                        @endphp

                                        <input type="hidden" value="{{ $auth_id }}" name="auth_id">
                                        <input type="hidden" value="{{ $company_id }}" name="company_id">
                                    @endif

                                    <button type="submit" class="btn btn-success"
                                    class="btn btn-primary py-3 px-4 animated slideInDown"
                    style="color: hsl(177, 82%, 27%);
          background: white;
          font-weight: bold;"
                                    >معرفة المزيد</button>



                                    {{-- <button type="submit" class="btn btn-success"
                                        class="btn btn-primary py-3 px-4 animated slideInDown"
                    style="color: hsl(177, 82%, 27%);
          background: white;
          font-weight: bold;"
                                        >معرفة المزيد</button> --}}

                                </form>

                            </div>
                        </div>
                    @endforeach











                    {{--

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item bg-white p-5">
                            <img class="img-fluid mb-4" src="img/icon-3.png" alt="">
                            <h5 class="mb-3">Currency Transaction</h5>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                                duo justo</p>
                            <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item bg-white p-5">
                            <img class="img-fluid mb-4" src="img/icon-9.png" alt="">
                            <h5 class="mb-3">Bitcoin Investment</h5>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                                duo justo</p>
                            <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-white p-5">
                            <img class="img-fluid mb-4" src="img/icon-5.png" alt="">
                            <h5 class="mb-3">Currency Exchange</h5>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                                duo justo</p>
                            <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item bg-white p-5">
                            <img class="img-fluid mb-4" src="img/icon-2.png" alt="">
                            <h5 class="mb-3">Bitcoin Escrow</h5>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                                duo justo</p>
                            <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item bg-white p-5">
                            <img class="img-fluid mb-4" src="img/icon-8.png" alt="">
                            <h5 class="mb-3">Token Sale</h5>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                                duo justo</p>
                            <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Company End -->


        {{-- ------------------------------------Compony-------------------------- --}}



        <!-- FAQs Start -->
        <!-- <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-6" style="color:white">تسالات</h1>
                    <p class="fs-5 mb-5"
                    style="color:white"
                    > ابراز التساولات</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="accordion" id="accordionExample">

                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">

                                </h2>
                                <div id=" " class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">

                                    </div>
                                </div>
                            </div>




                           





                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

    <!--Footer-->
    <footer class="print:hidden">


        {{-- <div class="md:mx-20 sm:w-1/2 lg:w-1/6">
            <img src="images/logos_033.webp" class=" mx-auto my-6" alt="">
            <div class="flex justify-center">
                <a class="mx-2" href="https://twitter.com/threedots_sa?s=21">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="24" height="24" rx="9" fill="white"></rect>
                        <path
                            d="M9.21608 18.0958C14.8753 18.0958 17.9737 13.4062 17.9737 9.33822C17.9737 9.20622 17.9737 9.07182 17.9641 8.93982C18.5665 8.50302 19.0873 7.96542 19.5001 7.34622C18.9385 7.59582 18.3433 7.75902 17.7337 7.83102C18.3769 7.44702 18.8569 6.84222 19.0873 6.12942C18.4825 6.48702 17.8225 6.74142 17.1337 6.87582C15.9673 5.63742 14.0185 5.57742 12.7801 6.74142C11.9809 7.49262 11.6425 8.61342 11.8897 9.68142C9.41528 9.55662 7.10888 8.38782 5.54648 6.46542C4.73048 7.87182 5.14568 9.66942 6.49928 10.5742C6.00968 10.5598 5.52968 10.4278 5.10248 10.1902C5.10248 10.2022 5.10248 10.2166 5.10248 10.2286C5.10248 11.6926 6.13448 12.955 7.57208 13.2454C7.11848 13.3678 6.64328 13.387 6.18248 13.2982C6.58568 14.551 7.74008 15.4102 9.05768 15.4366C7.96808 16.2934 6.62168 16.759 5.23688 16.7566C4.99208 16.7566 4.74728 16.7422 4.50488 16.711C5.90648 17.6158 7.54568 18.0958 9.21608 18.0934"
                            fill="#2D637E"></path>
                    </svg>

                </a>
                <a class="mx-2" href="https://www.linkedin.com/company/threedots-sa/">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="24" height="24" rx="9" fill="white"></rect>
                        <path
                            d="M5.83397 9.75651H8.45389V18.188H5.83397V9.75651ZM7.14491 5.56543C7.98273 5.56543 8.66285 6.24554 8.66285 7.08534C8.66285 7.92513 7.98273 8.60524 7.14491 8.60524C6.30512 8.60524 5.625 7.92513 5.625 7.08534C5.62303 6.24752 6.30315 5.56543 7.14491 5.56543Z"
                            fill="#2D637E"></path>
                        <path
                            d="M10.0977 9.75634H12.6111V10.9076H12.6466C12.9955 10.2452 13.8491 9.54541 15.1266 9.54541C17.78 9.54541 18.2709 11.292 18.2709 13.561V18.1878H15.6509V14.0894C15.6509 13.1096 15.6332 11.8539 14.2887 11.8539C12.9246 11.8539 12.7156 12.9184 12.7156 14.0184V18.1898H10.0977V9.75634Z"
                            fill="#2D637E"></path>
                    </svg>
                </a>
            </div>
        </div>
        <div class="md:mx-20 sm:w-1/2 lg:w-1/6">
            <img src="images/logos_022.webp" class=" mx-auto my-6" alt="">
            <div class="flex justify-center">
                <a class="mx-2" href="https://twitter.com/glowork?s=21">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="24" height="24" rx="9" fill="white"></rect>
                        <path
                            d="M9.21608 18.0958C14.8753 18.0958 17.9737 13.4062 17.9737 9.33822C17.9737 9.20622 17.9737 9.07182 17.9641 8.93982C18.5665 8.50302 19.0873 7.96542 19.5001 7.34622C18.9385 7.59582 18.3433 7.75902 17.7337 7.83102C18.3769 7.44702 18.8569 6.84222 19.0873 6.12942C18.4825 6.48702 17.8225 6.74142 17.1337 6.87582C15.9673 5.63742 14.0185 5.57742 12.7801 6.74142C11.9809 7.49262 11.6425 8.61342 11.8897 9.68142C9.41528 9.55662 7.10888 8.38782 5.54648 6.46542C4.73048 7.87182 5.14568 9.66942 6.49928 10.5742C6.00968 10.5598 5.52968 10.4278 5.10248 10.1902C5.10248 10.2022 5.10248 10.2166 5.10248 10.2286C5.10248 11.6926 6.13448 12.955 7.57208 13.2454C7.11848 13.3678 6.64328 13.387 6.18248 13.2982C6.58568 14.551 7.74008 15.4102 9.05768 15.4366C7.96808 16.2934 6.62168 16.759 5.23688 16.7566C4.99208 16.7566 4.74728 16.7422 4.50488 16.711C5.90648 17.6158 7.54568 18.0958 9.21608 18.0934"
                            fill="#2D637E"></path>
                    </svg>
                </a>
                <a class="mx-2" href="https://www.linkedin.com/company/glowork/">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="24" height="24" rx="9" fill="white"></rect>
                        <path
                            d="M5.83397 9.75651H8.45389V18.188H5.83397V9.75651ZM7.14491 5.56543C7.98273 5.56543 8.66285 6.24554 8.66285 7.08534C8.66285 7.92513 7.98273 8.60524 7.14491 8.60524C6.30512 8.60524 5.625 7.92513 5.625 7.08534C5.62303 6.24752 6.30315 5.56543 7.14491 5.56543Z"
                            fill="#2D637E"></path>
                        <path
                            d="M10.0977 9.75634H12.6111V10.9076H12.6466C12.9955 10.2452 13.8491 9.54541 15.1266 9.54541C17.78 9.54541 18.2709 11.292 18.2709 13.561V18.1878H15.6509V14.0894C15.6509 13.1096 15.6332 11.8539 14.2887 11.8539C12.9246 11.8539 12.7156 12.9184 12.7156 14.0184V18.1898H10.0977V9.75634Z"
                            fill="#2D637E"></path>
                    </svg>
                </a>
            </div>
        </div>
        <div class="md:mx-20 sm:w-1/2 lg:w-1/6">
            <img src="images/placeholder.webp" class=" mx-auto my-6" alt="">
            <div class="flex justify-center">
                <a class="mx-2" href="https://twitter.com/astepahead_8?s=21">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="24" height="24" rx="9" fill="white"></rect>
                        <path
                            d="M9.21608 18.0958C14.8753 18.0958 17.9737 13.4062 17.9737 9.33822C17.9737 9.20622 17.9737 9.07182 17.9641 8.93982C18.5665 8.50302 19.0873 7.96542 19.5001 7.34622C18.9385 7.59582 18.3433 7.75902 17.7337 7.83102C18.3769 7.44702 18.8569 6.84222 19.0873 6.12942C18.4825 6.48702 17.8225 6.74142 17.1337 6.87582C15.9673 5.63742 14.0185 5.57742 12.7801 6.74142C11.9809 7.49262 11.6425 8.61342 11.8897 9.68142C9.41528 9.55662 7.10888 8.38782 5.54648 6.46542C4.73048 7.87182 5.14568 9.66942 6.49928 10.5742C6.00968 10.5598 5.52968 10.4278 5.10248 10.1902C5.10248 10.2022 5.10248 10.2166 5.10248 10.2286C5.10248 11.6926 6.13448 12.955 7.57208 13.2454C7.11848 13.3678 6.64328 13.387 6.18248 13.2982C6.58568 14.551 7.74008 15.4102 9.05768 15.4366C7.96808 16.2934 6.62168 16.759 5.23688 16.7566C4.99208 16.7566 4.74728 16.7422 4.50488 16.711C5.90648 17.6158 7.54568 18.0958 9.21608 18.0934"
                            fill="#2D637E"></path>
                    </svg>
                </a>
                <a class="mx-2" href="https://www.linkedin.com/company/astepahead8/">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="24" height="24" rx="9" fill="white"></rect>
                        <path
                            d="M5.83397 9.75651H8.45389V18.188H5.83397V9.75651ZM7.14491 5.56543C7.98273 5.56543 8.66285 6.24554 8.66285 7.08534C8.66285 7.92513 7.98273 8.60524 7.14491 8.60524C6.30512 8.60524 5.625 7.92513 5.625 7.08534C5.62303 6.24752 6.30315 5.56543 7.14491 5.56543Z"
                            fill="#2D637E"></path>
                        <path
                            d="M10.0977 9.75634H12.6111V10.9076H12.6466C12.9955 10.2452 13.8491 9.54541 15.1266 9.54541C17.78 9.54541 18.2709 11.292 18.2709 13.561V18.1878H15.6509V14.0894C15.6509 13.1096 15.6332 11.8539 14.2887 11.8539C12.9246 11.8539 12.7156 12.9184 12.7156 14.0184V18.1898H10.0977V9.75634Z"
                            fill="#2D637E"></path>
                    </svg>
                </a>
            </div>
        </div> --}}
        </div>

 <script>
            var asd = document.getElementById("time_database").innerHTML;

            var countDownDate = new Date(asd).getTime();


            var myfunc = setInterval(function() {
                
            

                var now = new Date().getTime();

                if(countDownDate > now )
                {
                 
             
                var timeleft = countDownDate - now;

               
    
                var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
                var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);

                var xx = document.getElementById("days").innerHTML = days
                var xxx = document.getElementById("hours").innerHTML = hours
                var xxxx = document.getElementById("mins").innerHTML = minutes
                var xxxxx = document.getElementById("secs").innerHTML = seconds

              
                }
else if(countDownDate <= now)
{
                    var xx = document.getElementById("days").innerHTML = 0
                    var xxx = document.getElementById("hours").innerHTML = 0
                    var xxxx = document.getElementById("mins").innerHTML = 0
                    var xxxxx = document.getElementById("secs").innerHTML = 0
                    clearInterval(myfunc);
                    return;
    
}

            }, 1000)
        </script>
<style>
    h1{
        font-size:32px!important;
    }
</style>
 
    @endsection
