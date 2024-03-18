<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href={{ asset('css/styleLogin.css') }} />
    <style>
        a.navigator {
            text-decoration: none;
            color: white;
            font-size: 22px;
        }
    </style>
    <title>تسجيل دخول & تسجيل جديد </title>
    <style>
        strong{
            display: block;
            width: 500px;
            color: red;
            margin-bottom: 10px;
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet"></link> -->
<link rel="stylesheet" href={{ asset('css/styleLogin.css') }} />
</head>

<body>
    <div class="container" style="font-family: Tajawal;">
        <div class="forms-container">
            <div class="signin-signup">
                <form method="POST" action="{{ route('login') }}" class="sign-in-form">
                    @csrf
                    <h2 class="title" style="font-family: Tajawal;">تسجيل دخول</h2>
                    <div class="input-field" dir="rtl">
                        <i class="fas fa-user"></i>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder=" قم بأدخال الايميل  ">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field" dir="rtl">
                        <i class="fas fa-lock"></i>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password" placeholder="قم بأدخال كلمة المرور">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <input type="submit" style="font-family: Tajawal;" value="دخول" class="btn solid" style="font-size:20px;" />
                    <!-- <p class="social-text"> أو قم بالتسجيل من خلال </p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div> -->
                </form>
                <form action="#" class="sign-up-form">
                    <h2 class="title" style="font-family: Tajawal;">انشاء حساب جديد</h2>
                    <button type="submit" class="btn"><a href="{{ URL('Register_Compony') }}"
                            class="navigator" style="font-family: Tajawal;">شركة</a></button>
                    <button type="submit" class="btn"><a href="{{ URL('Jop_Search') }}"
                            class="navigator" style="font-family: Tajawal;">
                       باحث عن عمل
                        
                        </a></button>
                        
                              <button type="submit" class="btn"><a href="{{ URL('Vistore') }}"
                            class="navigator" style="font-family: Tajawal;">
                      زائر
                        
                        </a></button>
                        
                    <!-- <p class="social-text" style="font-family: Tajawal;"> أو قم بالتسجيل من خلال </p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div> -->
                </form>

            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>هل انت جديد ؟ </h3>
                    <p>
                        للمزيد من البيانات ومتابعة التجديدات قم بالتسجيل لتحصل علي فرصتك معنا
                    </p>
                    <button class="btn transparent" id="sign-up-btn" style="font-family: Tajawal;">
                        تسجيل جديد
                    </button>
                </div>
                <img src="img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>هل انت معنا ؟ </h3>
                    <p>
                        للمزيد من البيانات ومتابعة التجديدات قم بالتسجيل لتحصل علي فرصتك معنا
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        تسجيل دخول
                    </button>
                </div>
                <img src="img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="js/app.js"></script>

</body>

</html>
