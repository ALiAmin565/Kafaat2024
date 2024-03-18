@extends('Dashbord.layout.master')
@section('name')
 صفحه تعديل باحثي عن عمل
<i class="fa-solid fa-home"></i>
@endsection
@section('content')

@if (Session()->has('massage'))
<div class="alert alert-success">
    {{ Session()->get('massage') }}
    <ul>
        
    </ul>
</div>
@endif
 
    <form action="{{ route('user_vistore_update',$Securitys->id) }}" method="POST"
                                enctype="multipart/form-data" class="was-validated">
                                @csrf



                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">الاسم </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            value="{{ $Securitys->name }}" name="name" required minlength="3">
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">الاميل </label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="name@example.com" value="{{$Securitys->email }}"
                                            name="email" required minlength="8">
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                                         
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">       تغير  كلمة السر </label>
      <input type="password" class="form-control" id="exampleFormControlInput1"
         name="password" minlength="8">
         <div class="valid-feedback">Valid.</div>
     <div class="invalid-feedback"> 
 يرجي ملىء هذا الحقل بأكثر من 8 حروف وارقام
     </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">رقم التليفون </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            value="{{ $jopsearch->phone }}" name="phone" required
                                            minlength="10">
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">المؤهل العلمي </label>
                                        <input type="text" class="form-control"id="exampleFormControlInput1"
                                            value="{{ $jopsearch->education }}" name="education" required
                                            minlength="4">
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">   التخصص   </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            value="{{ $jopsearch->educational_specialization }}"
                                            name="educational_specialization" required minlength="4">
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    
                                     
                                  

                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success "  > ارسال
                                    </button>
                            </form>
@endsection
