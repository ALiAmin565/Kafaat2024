

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('include.css')
</head>
<body>
    @include('include.nav')
    <main class="mx-auto md:py-16 flex-wrap justify-between "
    style="background: #f3f4f6;"
    dir="rtl">


        <div>
            <div>
                <div class="flex justify-center">
                    <p class="font-bold text-2xl mt-4 xl:text-4xl "
                    style="color:hsl(177, 82%, 27%);text-align: center;"
                    >
                      ملفات المعرض
                    </p>
                </div>
            </div>
            @foreach ($files as $value)
                <div>
                    <div class="md:mx-20  flex justify-center">
                        <p class="font-bold text-xl xl:text-2xl  mt-10"
                        style="color:hsl(177, 82%, 27%);text-align: center;"
                        >
                            {{ $value->title }}
                        </p>
                    </div>

                    <div class="border-b-2 p-5 lg:mx-80">
                        <div class="flex justify-around  margin-center">
                            <div class="text-grey font-bold">
                                <div class="bg-grey-04 items-center flex justify-around p-2 rounded-xl ">
      <a href="{{ asset('assets/file/'.$value->file) }}" target="blank">
                                        <svg class="margin-start" width="50" height="50" viewBox="0 0 50 50"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="50" height="50" rx="10" fill="white"></rect>
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
                                    <a href="#" class="lg:mx-10 mx-6">
                                        {{ $value->description }}
                                    </a>
                                    <a href="{{ asset('assets/file/'.$value->file) }}" download="">

                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.5 12.5V15.8333C17.5 16.2754 17.3244 16.6993 17.0118 17.0118C16.6993 17.3244 16.2754 17.5 15.8333 17.5H4.16667C3.72464 17.5 3.30072 17.3244 2.98816 17.0118C2.67559 16.6993 2.5 16.2754 2.5 15.8333V12.5"
                                                stroke="#5C5C5C" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M5.83398 8.33337L10.0007 12.5L14.1673 8.33337" stroke="#5C5C5C"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10 12.5V2.5" stroke="#5C5C5C" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    </main>

     @include('include.footer')
</body>
</html>
