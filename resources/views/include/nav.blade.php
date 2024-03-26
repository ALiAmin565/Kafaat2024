

<style>
    .loh {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: #01579B;
        color: #ffffff;

    }.log{
        display: none;
    }#logo_for_phone
    {
        display: none;
    }#homepage_forPhone
    {
        display: none
    }
    #login_for_web2
     {
        display: none
     }
     #login_for_web
     {
        display: none
     }
    @media screen and (max-width: 992px) {
  #media {
    float: right;

  }
.log{
    display: block
  }#rtl a{
    display: block;
    text-align: center
  }#logo_for_phone
  {
      width:50px;
    display: inline;
  }
#logo_phone{
    margin-right: auto;
    padding: 10px;
  } #contoller{
    margin-right: 50px
  }#homepage_forPhone
    {
        display: inline;

    }#rtl #homepage_forPhone2
    {
        background-color: red;
        display: none

    }#contoller
     {
        display: none;
     }
    #navbarCollapse form
     {
        text-align: center
     }#not_login2
     {
        display: none
     }
     #not_login
     {
        display: none
     }    #login_for_web2
     {
        display: inline-block
     }
     #login_for_web
     {
        display: inline-block
     }
}
</style>

<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5" style="height:10vh">


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
            <img  id="logo_for_phone"  class="img-fluid me-2" src="{{ asset('logo/LogoMain.png') }}"alt="" style="width: 200px;" >
        </a>
            <form action={{ route('dashboardCompany') }} method="get">
                <button class="btn btn-success ms-2" id="contoller" type="submit"
                style="color: hsl(177, 82%, 27%);
          background: white;
          font-weight: bold;"
                > لوحه التحكم</button>

            </form>
        @elseif (Auth::user()->status == 'Jop_serach')
        <a href="{{ route('home_page') }}" id="logo_phone">
            <img  id="logo_for_phone"  class="img-fluid me-2" src="{{ asset('logo/LogoMain.png') }}"alt="" style="width: 200px;" >
        </a>
            <form action={{ route('user_show', Auth::user()->id) }} method="post">
                @csrf
                <input type="hidden" name="id" value="{{ Auth::user()->id }}" id="">
                    <input type="hidden" name="status" value="{{ Auth::user()->status }}" id="">
                <button class="btn  ms-2" id="contoller" > لوحه التحكم</button>


            </form>
            
            
            
                    @elseif (Auth::user()->status == 'vistore')
        <a href="{{ route('home_page') }}" id="logo_phone">
            <img  id="logo_for_phone"  class="img-fluid me-2" src="{{ asset('logo/LogoMain.png') }}"alt="" style="width: 200px;" >
        </a>
      <form action={{ route('user_show', Auth::user()->id) }} method="post">
                @csrf
                <input type="hidden" name="id" value="{{ Auth::user()->id }}" id="">
                    <input type="hidden" name="status" value="{{ Auth::user()->status }}" id="">
                <button class="btn  ms-2" id="contoller" > لوحه التحكم</button>


            </form>

            @elseif (Auth::user()->status == 'Super_Admin')
            <a href="{{ route('home_page') }}" id="logo_phone">
                <img  id="logo_for_phone"  class="img-fluid me-2" src="{{ asset('logo/LogoMain.png') }}"alt="" style="width: 200px;" >
            </a>



                <a href="{{ route('Admin_Home') }}">
                    <button class="btn ms-2" id="contoller"> صفحه التحكم</button>
                    </a>
            </form>
        @endif
    @else
        <!--<form action={{ route('login') }} method="GET">-->
        <!--    <button class=" btn btn-success me-2" id="not_login"-->
        <!--    style="color: hsl(177, 82%, 27%);-->
        <!--  background: white;-->
        <!--  font-weight: bold;"-->
        <!--    >تسجيل جديد</button>-->
        <!--</form>-->
        <form action={{ route('login') }} method="GET">
            <button class="btn btn-success" id="not_login2"
            style="color: hsl(177, 82%, 27%);
          background: white;
          font-weight: bold;"
            > تسجيل الدخول</button>
        </form>
        <a href="{{ route('home_page') }}" id="logo_phone">
            <img  id="logo_for_phone"  class="img-fluid me-2" src="{{ asset('logo/LogoMain.png') }}"alt="" style="width: 200px;" >
        </a>
    @endif

{{-- ----------------------------------------------------------- --}}

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon" onclick="ahmed()"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav m-auto py-4 py-lg-0" id="rtl">
            <a href="{{ route('home_page') }}" id="homepage_forPhone" class="nav-item nav-link active"
            style="font-size: larger;
    font-weight: 700;"
            > الصفحة الرئسية
                    <i class="fa fa-home"></i> 
                   
                   </a>

            <a href="{{ route('applicants') }}" class="nav-item nav-link"
            style="font-size: larger;
    font-weight: 700;"
            >
              ملفات المعرض
                <i class="fa-solid fa-file"></i>
                </a>

                <a href="{{ route('home_page') }}" id="homepage_forPhone2" class="nav-item nav-link active"
                style="font-size: larger;
        font-weight: 700;"
                
                > الصفحة الرئسية
                    <i class="fa fa-home"></i> 
                   
                   </a>


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
                      font-weight: bold;"
                        > لوحه التحكم</button>


                    </form>
                       @elseif (Auth::user()->status == 'vistore')
      
         <form action={{ route('user_show', Auth::user()->id) }} method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ Auth::user()->id }}" id="">
          <input type="hidden" name="status" value="{{ Auth::user()->status }}" id="">

                        <button class=" btn btn-success me-2"  id="contoller2"
                        style="color: hsl(177, 82%, 27%);
                      background: white;
                      font-weight: bold;"
                        > لوحه التحكم</button>


                    </form>
            
                @elseif (Auth::user()->status == 'Jop_serach')

                    <form action={{ route('user_show', Auth::user()->id) }} method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ Auth::user()->id }}" id="">
                        <button class=" btn btn-success me-2"  id="contoller2"
                        style="color: hsl(177, 82%, 27%);
                      background: white;
                      font-weight: bold;"
                        > لوحه التحكم</button>


                    </form>
                    
                             

                    @elseif (Auth::user()->status == 'Super_Admin')

                        <a href="{{ route('Admin_Home') }}">
                            <button class=" btn btn-success me-2"  id="contoller2"
                            style="color: hsl(177, 82%, 27%);
                          background: white;
                          font-weight: bold;"
                            > لوحه التحكم</button>

                            </a>
                    </form>
                @endif
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
document.getElementById('logout-form').submit();">تسجيل الخروج</a>
@endif

                @if(!Auth::check())
                <!--<form action={{ route('login') }} method="GET">-->
                <!--    <button class=" btn btn-success me-2" id="login_for_web"-->
                <!--    style="color: hsl(177, 82%, 27%);-->
                <!--  background: white;-->
                <!--  font-weight: bold;-->
                <!--  width:130px;-->
                <!--  height:50px";-->
                <!--    >تسجيل  جديد</button>-->
                <!--</form>-->
                <!--<br>-->
                <form action={{ route('login') }} method="GET">
                    <button class="btn btn-success" id="login_for_web2"
                    style="color: hsl(177, 82%, 27%);
                  background: white;
                  font-weight: bold;
                  width:125px;
                  height:50px";

                  ;
                    > تسجيل الدخول</button>
                </form>


                @endif

            </div>



        </div>
        <div class="h-100 d-lg-inline-flex align-items-center d-none">
            <a href="{{ route('home_page') }}" class="navbar-brand d-flex align-items-center">
                <h2 class="m-0 text-primary">
                    <img class="img-fluid me-2" src={{ asset('logo/LogoMain.png') }} alt="" style="width: 200px;">
                </h2>
            </a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>

function ahmed()
 {
    $("#navbarCollapse").toggle()
}
</script>
