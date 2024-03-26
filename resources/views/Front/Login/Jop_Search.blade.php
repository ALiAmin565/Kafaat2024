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

        strong {
            display: block;
            width: 500px;
            color: red;
            margin-bottom: 10px;
        }

        * {
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
        body {
  font-family: 'Tajawal', sans-serif;
}
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap">

    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body style="">
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5" style="
    display: flex;
    justify-content: space-between;
    background: #f1eeee !important;    margin-bottom: 3rem;">
    <div class="navbar-nav ml-auto">
        <a href="{{ route('home_page') }}" class="nav-item nav-link active" style="font-size: larger; font-weight: 700;">
            <i class="fa fa-home"></i> 
            الصفحة الرئيسية
        </a>
    </div>
    <a href="{{ route('home_page') }}" class="navbar-brand">
        <img id="logo_for_phone" class="img-fluid" src="{{ asset('logo/LogoMain.png') }}" alt="Logo" style="width: 180px;">
    </a>

</nav>
    <div class="container" style="background:none">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <h1 style="text-align: center;color:hsl(177, 82%, 27%);">
                    
                    <i class="fas fa-user-plus"></i>
                    سجل بياناتك</h1>
            </div>
            <div class="col-md-8">
                <form method="POST" action="{{ route('register') }}" class="sign-in-form"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="hidden" value="2">
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
                            placeholder="المؤهل الدراسي">

                        @error('education')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    {{-- New Code --}}
                    <div class="input-field">
                        <i class="fas fa-graduation-cap"></i>
                        <select id="qualification" class="form-control" name="qualification" required style="width: 102%;
    border-radius: 3rem;
    background: #f0f0f0;    border: 1px solid #eceef1;">
                            <option value="">اختر المؤهل الدراسي</option>
                            @foreach ($qualifications as $qualification)
                                <option value="{{ $qualification->id }}">{{ $qualification->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-briefcase"></i>
                        <select id="specialist" class="form-control" name="specialist" required style="width: 102%;
    border-radius: 3rem;
    background: #f0f0f0;    border: 1px solid #eceef1;">
                            <option value="">اختر التخصص</option>
                            <!-- Options will be loaded here -->
                        </select>
                    </div>

                    <script>
                        document.getElementById('qualification').addEventListener('change', function() {
                            var qualificationId = this.value;
                            var specialistSelect = document.getElementById('specialist');
                            specialistSelect.innerHTML = '<option value="">اختر التخصص</option>'; // Reset specialist dropdown

                            // Fetch specializations based on the selected qualification
                            fetch(`/specializations-for-qualification/${qualificationId}`)
                                .then(response => response.json())
                                .then(data => {
                                    data.forEach(function(specialization) {
                                        var option = new Option(specialization.name, specialization.id);
                                        specialistSelect.appendChild(option);
                                    });
                                });
                        });
                    </script>

                    {{-- End Code --}}

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
                        <input id="password-confirm" type="password" class="form-control"
                            name="password_confirmation" required autocomplete="new-password"
                            placeholder="قم بتأكيد كلمة المرور الخاصة بك">
                    </div>
                    <span dir="rtl" style="color: hsl(177, 82%, 27%);font-weight: 800;">
                        تحميل السيرة الذاتية (pdf)
                    </span>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="img" type="file" class="form-control @error('img') is-invalid @enderror"
                            accept="image/png, image/gif, image/jpeg ,application/pdf" name="img" required
                            autocomplete="new-img">

                        @error('img')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <input type="submit" value="اتمام التسجيل" class="btn solid" style="font-size:20px;border-radius: 0.5rem;" />

                </form>
            </div>
        </div>
    </div>

</body>
