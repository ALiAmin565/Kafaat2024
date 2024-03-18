@extends('Dashbord.layout.master')
@section('name')
 صفحه  تعديل الشركات
<i class="fa-solid fa-home"></i>
@endsection
@section('content')
<form action="{{ route('Company.update',$Company->id) }}"  method="post" enctype="multipart/form-data"class="was-validated">
     @csrf
     {{ method_field('PUT') }}

     <div class="form-group">
       <label for="exampleInputEmail1">اسم الشركه</label>
       <input required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $Company->User->name }}" name="name"   required minlength="4" >
     </div>

     <div class="form-group">
      <label for="exampleInputEmail1">اميل الشركه</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $Company->User->email }}" name="email" required minlength="8">
    </div>

    <!--<div class="form-group">-->
    <!--  <label for="exampleInputEmail1">البسورد الخاص بالشركه </label>-->
      
    <!--  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ Hash::check('plain-text',  $Company->User->password) }}" name="password" required  min=5 minlength="8">-->
    <!--</div>-->
       <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">       تغير  كلمة السر </label>
      <input type="password" class="form-control" id="exampleFormControlInput1"
         name="password" minlength="8">
         <div class="valid-feedback"></div>
     <div class="invalid-feedback"> 
 يرجي ملىء هذا الحقل بأكثر من 8 حروف وارقام
     </div>
 <!--                                   </div>-->
 <!--                                       <div class="mb-3">-->
 <!--   <label for="exampleFormControlInput1" class="form-label">       تأكيد كلمة السر </label>-->
 <!--     <input type="password" class="form-control" id="exampleFormControlInput1"-->
 <!--        name="password" minlength="8">-->
 <!--        <div class="valid-feedback">Valid.</div>-->
 <!--    <div class="invalid-feedback"> -->
 <!--يجب تطابق كلمة السر-->
 <!--    </div>-->
              


     <div class="form-group">
          <label for="exampleInputEmail1">اسم موظف الشركه</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $Company->representive }}"  name="representive"  required  minlength="3">
        </div>
        {{-- for delete form login user table --}}

    

     <div class="form-group">
          <label for="exampleFormControlTextarea1">نبذه عن  الشركه </label>
          <textarea  required class="form-control" id="exampleFormControlTextarea1" rows="3" name="brief"  minlength="8"  required >
               {{ $Company->brief }}
          </textarea>
        </div>

        

        {{-- hidden for user_id --}}

        <input type="hidden" name="user_id" value="{{ $Company->user_id }}">
       

      <div class="form-group mt-2">
          <label for="exampleInputEmail1">تغير الشعار</label>
          <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"   name="img">
        </div>

      
        <!-- <div class="im">-->
             
        <!--  <a href="{{ asset('assets/file/'.$Company->pdfFile) }}" download="" >تحميل الرخصة </a>-->
        <!--</div>-->
        <br/>
       
        
      
     
     <button type="submit" class="btn btn-primary">Submit</button>
   </form>



   <script>

   </script>
@endsection