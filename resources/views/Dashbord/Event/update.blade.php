@extends('Dashbord.layout.master')
@section('name')
    اضافه ايفنت
    <i class="fa-solid fa-home"></i>
@endsection
@section('content')
    <form action="{{ route('event.update', $event->id) }}" method="post" enctype="multipart/form-data" class="was-validated">
        @csrf
        {{ method_field('PUT') }}

        <div class="form-group">
            <label for="exampleInputEmail1">الاسم</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="ادخل اسم الايفنت" value="{{ $event->name }}" name="name" required>
        </div>
        <input type="hidden" name="id" id="" value="{{ $event->id }}">
        <label for="basic-url">موقع الايفنت</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            </div>
            <input type="url" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="location"
                value="{{ $event->location }}" required>
        </div>


        <div class="form-group">
            <label for="exampleFormControlTextarea1">نبذه عن الايفنت</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descrption" required>
            {{ $event->descrption }}
          </textarea>
        </div>

        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <label for="startDate">البدايه </label>
                <input id="startDate" class="form-control" type="date" name="start_date" value="{{ $event->start_date }}"
                    required />
                <span id="startDateSelected"></span>
            </div>
            <div class="col-lg-3 col-sm-6">
                <label for="endDate">النهايه</label>
                <input id="endDate" class="form-control" type="date" name="end_date" value="{{ $event->end_date }}"
                    required />
                <span id="endDateSelected"></span>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">مكان الحدث</label>
            <input class="form-control" type="text" name="place" value="{{ $event->place }}" required />
        </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">بداية المؤتمر</label>
            <input class="form-control" type="text" name="startEvent" value="{{ $event->startEvent }}" required />
        </div>

        <div class="form-group mt-2">
            <label for="exampleInputEmail1">الصوره</label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="ادخل اسم الايفنت" name="img" value="{{ $event->img }}">
        </div>
         <div class="form-group mt-2">
            <label for="exampleInputEmail1">ملف المؤتمر</label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="ادخل اسم الايفنت" name="pdfFile" value="{{ $event->pdfFile}}">
        </div>
        <br>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
