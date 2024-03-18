@extends('Dashbord.layout.master')
@section('name')
       تعديل 
    <i class="fa-solid fa-home"></i>
@endsection
@section('content')
    {{--  @dd($question);  --}}
    <form action={{ route('setting.update', $setting->id) }} method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="basic-url"> عنوان قسم شركات الرعاة</label>
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"name="artical"
                placeholder="قم بأدخال  عنوان القسم " value="{{ $setting->artical }}">
        </div>
             <label for="basic-url"> عنوان قسم الشركات  </label>
        <div class="input-group mb-3">
            <input type="text" class="form-control"  aria-describedby="basic-addon3"name="title_company"
                placeholder="قم بأدخال  عنوان القسم " value="{{ $setting->title_company }}">
        </div>
        <label for="basic-url"> الجواب</label>
        <div class="input-group mb-3">
            <input type="file" class="form-control" id="basic-url" aria-describedby="basic-addon3"name="img"
                placeholder="قم بأدخال  الجواب " value="{{ $setting->logo_img }}">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">تأكيد</button>
    </form>
@endsection
