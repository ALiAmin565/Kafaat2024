@extends('Dashbord.layout.master')
@section('name')
    اضافة سؤال
    <i class="fa-solid fa-home"></i>
@endsection
@section('content')
    <form action={{ route('pdf.store') }} method="post" enctype="multipart/form-data">
        @csrf
        <label for="basic-url"> العنوان</label>
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"name="title"
                placeholder="قم بأدخال   ">
        </div>
        <label for="basic-url"> الموضوع</label>
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"name="description"
                placeholder="قم بأدخال   ">
        </div>
        <div class="form-group mt-2">
            <label for="exampleInputEmail1">الملف</label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="ادخل الملف " name="file">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">تأكيد</button>
    </form>
@endsection
