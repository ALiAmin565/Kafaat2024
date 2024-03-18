@extends('Dashbord.layout.master')
@section('name')
    اضافه ايفنت
    <i class="fa-solid fa-home"></i>
@endsection
@section('content')
    <form action={{ route('logo.update', $logo->id) }} method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="basic-url"> العنوان الرئيسي</label>
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"name="alt"
                value={{ $logo->alt }}>
        </div>
        <div class="form-group mt-2">
            <label for="exampleInputEmail1">الصوره</label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="ادخل اسم الايفنت" name="img">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">تأكيد</button>
    </form>
@endsection
