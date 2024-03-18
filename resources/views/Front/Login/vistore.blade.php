<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        
        كفاءات تقنية
    </title>
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
            background-image: linear-gradient(-45deg, #4481eb 0%, #04befe 100%);
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
*{
    text-align: end;
}
   
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>
</head>

<body>
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <h1 style="text-align: center;color:hsl(177, 82%, 27%);">تسجيل بيانات الزائر</h1>
            </div>
            <div class="col-md-8">
                <form method="POST" action="{{ route('register') }}" class="sign-in-form"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="hidden" value="3">
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                            placeholder="قم بأدخال الاسم ">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="educational specialization" type="number"
                            class="form-control @error('educational specialization') is-invalid @enderror"
                            name="educational_specialization" value="{{ old('educational specialization') }}" required
                            autocomplete="educational specialization" placeholder="  رقم الهويه ">

                        @error('educational specialization')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email"
                            placeholder="قم بأدخال الايميل الخاص بك ">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror"
                            name="phone" value="{{ old('phone') }}" required autocomplete="phone"
                            placeholder="قم بأدخال رقم الهاتف الخاص بك ">

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="education" type="education"
                            class="form-control @error('education') is-invalid @enderror" name="education"
                            value="{{ old('education') }}" required autocomplete="education"
                            placeholder="المؤهل الدراسي"  > 

                        @error('education')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password" placeholder="قم بأدخال كلمة المرور الخاصة بك">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password" placeholder="قم بتأكيد كلمة المرور الخاصة بك">
                    </div>
                   
                    

                    <input type="submit" value="دخول" class="btn solid" style="font-size:20px;" />

                </form>
            </div>
        </div>
    </div>
