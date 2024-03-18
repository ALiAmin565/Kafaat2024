@extends('Dashbord.layout.master')
@section('name')
    اضافه ايفنت
    <i class="fa-solid fa-home"></i>
@endsection
@section('content')
    <form action={{ route('user.update', $users->id) }} method="post" class="was-validated" >
        @csrf
        @method('PUT')
        <label for="basic-url">  الاميل الخاص بكم  </label>
        <div class="input-group mb-3">
            <input type="email" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="email"
                value={{ $users->email }}  required>
        </div>


        <label for="basic-url"> ادخل كلمه السر الجديده</label>
        <div class="input-group mb-3">
           <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"   autocomplete="new-password" minlength="8">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
          <label for="basic-url"> تاكيد كلمه السر الجديده</label>
        <div class="input-group mb-3">
            <input type="password" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="password_confirmation" minlength="8"
           >
        
   </div>
        
        <br>

        <button type="submit" class="btn btn-primary">تأكيد</button>
    </form>
@endsection
