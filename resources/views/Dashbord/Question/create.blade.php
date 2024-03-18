@extends('Dashbord.layout.master')
@section('name')
    اضافة سؤال
    <i class="fa-solid fa-home"></i>
@endsection
@section('content')
    <form action={{ route('question.store') }} method="post" enctype="multipart/form-data">
        @csrf
        <label for="basic-url"> السؤال</label>
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"name="question"
                placeholder="قم بأدخال  السؤال ">
        </div>
        <label for="basic-url"> الجواب</label>
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"name="answer"
                placeholder="قم بأدخال  الجواب ">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">تأكيد</button>
    </form>
@endsection
