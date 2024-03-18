@extends('Dashbord.layout.master')
@section('name')
    اضافه ايفنت
    <i class="fa-solid fa-home"></i>
@endsection
@section('content')
    <form action={{ route('sectiontwo.update', $section->id) }} method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="basic-url"> العنوان الرئيسي</label>
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"name="title"
                value={{ $section->title }}>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">الموضوع او الوصف</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descrption">  {{ $section->descrption }}
        </textarea>
        </div>
        <div class="form-group mt-2">
            <label for="exampleInputEmail1">الصوره</label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="ادخل اسم الايفنت" name="img" value={{ $section->img }}>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">تأكيد</button>
    </form>
@endsection
