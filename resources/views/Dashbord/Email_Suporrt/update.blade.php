@extends('Dashbord.layout.master')
@section('name')
    اضافه ايفنت
    <i class="fa-solid fa-home"></i>
@endsection


@if(session()->has('msg'))
    <div class="alert alert-success">
        {{ session()->get('msg') }}
    </div>
@endif

@section('content')
    <form action={{ route('email.update', $email->id) }} method="post" class="was-validated" >
        @csrf
        @method('PUT')
        
        <label for="basic-url">  الاميل الخاص بكم  </label>
        <div class="input-group mb-3">
            <input type="email" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="email"
                value={{ $email->email }}  required>
        </div>


         

           
 
 

        <button type="submit" class="btn btn-primary">تأكيد</button>
    </form>
@endsection
