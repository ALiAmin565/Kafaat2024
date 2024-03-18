<!DOCTYPE html>
<html lang="en">

<head>
    <title>كفاءات تقنية</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href={{ asset('css/styleLogin.css') }} />
    <style>
        .container:before {
            content: "";
            position: absolute;
            height: 1500px;
            width: 2000px;
            top: -4%;
            right: 88%;
            transform: translateY(0%);
            /* background-image: linear-gradient(-45deg, #4481eb 0%, #04befe 100%); */
            transition: 1.8s ease-in-out;
            border-radius: 50%;
            z-index: 6;
            display: none;
        }

        strong{
            display: block;
            width: 500px;
            color: red;
            margin-bottom: 10px;
        }
        
    </style>

</head>

<body dir="rtl"  >


    <div class="container ">
        <div class="row justify-content-center text-center">
            <div class="col-lg-12">
                <h1>تسجيل بيانات الشركة</h1>
            </div>
            <div class="col-md-8">
                <form method="POST" action="{{ route('register') }}" class="sign-in-form"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="hidden" value="1">
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                            placeholder="ادخل اسم الشركة">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="representive" type="text"
                            class="form-control @error('representive') is-invalid @enderror" name="representive"
                            value="{{ old('representive') }}" required autocomplete="name" autofocus
                            placeholder=" ممثل الشركة">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="brief" type="text" class="form-control @error('brief') is-invalid @enderror"
                            name="brief" value="{{ old('brief') }}" required autocomplete="name" autofocus
                            placeholder=" نبذه مختصرة عن الشركة ">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email"
                            placeholder=" قم بأدخال الايميل الخاص بالشركة ">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password" placeholder="قم بأدخال كلمة المرور">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password" placeholder="قم بتأكيد كلمة المرور">
                    </div>
                                        <lable for="img"
                                        style="font-size: large;
    color: #0c7d78;
    font-weight:600;">تحميل شعار الشركة ( png-jpg)</lable>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="img" type="file"
                            class="form-control @error('img') is-invalid @enderror text-center" name="img" required
                                                        accept="image/png, image/gif, image/jpeg," 

                            autocomplete="new-img">

                        @error('img')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
    <!--                <lable for="uu"-->
    <!--                style="font-size: large;-->
    <!--color: #0c7d78;-->
    <!--font-weight:600;">-->
    <!--                   تحميل شعار الشركة مرة اخرى ( png-jpg)-->
    <!--</lable>-->
     <!--accept="image/png, image/gif, image/jpeg,application/pdf"-->
    <!--  <div class="input-field">-->
    <!--                    <i class="fas fa-user"></i>-->
    <!--                    <input id="img" type="file"-->
    <!--                        class="form-control @error('img') is-invalid @enderror text-center" name="img" required-->
    <!--                        accept="image/png, image/gif, image/jpeg,application/pdf"-->
    <!--                        autocomplete="new-img">-->
                            
    <!--                <div class="input-field">-->
    <!--                    <i class="fas fa-user"></i>-->
    <!--                    <input id="uu" type="file"-->
    <!--                        class="form-control @error('uu') is-invalid @enderror text-center" name="pdfFile" required-->
                               
    <!--                        autocomplete="new-img">-->
 
    <!--                    @error('uu')-->
    <!--                        <span class="invalid-feedback" role="alert">-->
    <!--                            <strong>{{ $message }}</strong>-->
    <!--                        </span>-->
    <!--                    @enderror-->
    <!--                </div>-->
                    
                    
                    
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="    float: unset;">
  <label class="form-check-label" for="flexCheckDefault" style="color:red;    margin-right: 1.5rem;
">
تم الاطلاع والموافقة على اتفاقية عدم الافصاح المتوفرة على صفحة ملفات المعرض  </label>
  
</div>
                    
                    
                    <input type="submit" value="دخول" class="btn solid" style="font-size:20px;" />
                    {{--  <input type="submit" value="تسجيل" class="btn solid" />  --}}

                    </div>
      
                </form>
            </div>
        </div>
    </div>
