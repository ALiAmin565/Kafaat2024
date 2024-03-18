<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>كفاءات تقنية</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    @include('include.css')
</head>
@include('include.nav');

<body style="background-color:hsl(220, 14%, 96%);">

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->
    @yield('container')
    @include('include.footer')
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up" style="    margin: -8px;"></i></a>
    @include('include.script')
</body>

</html>
