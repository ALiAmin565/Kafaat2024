@extends('Dashbord.layout.master')
@section('name')
  تعديل بينات الشركه ف المواتمر 
<i class="fa-solid fa-home"></i>
@endsection
@section('content')

@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif
@if(session()->has('ahmed'))
<div class="alert alert-danger">
    {{ session()->get('ahmed') }}
</div>
@endif

{{-- <form action="{{ route('edite_subscrip',$update_subscrip->id) }} " method="POST" class="was-validated">
     {{ method_field('PUT') }}
     @csrf --}}
 
     <form action="{{ route('edite_subscrip',$update_subscrip->id) }}" method="post" enctype="multipart/form-data" class="was-validated">
          @csrf
          {{-- {{ method_field('PUT') }} --}}
  
     

     <div class="form-group">
      <label for="Number"> عدد كراسي الشركه  </label>
 <input type="unmber" class="form-control" id="Number" aria-describedby="Number"
  value="{{ $update_subscrip->numberAvailiable }}" name="Number_Avilable" required minlength="1">
    </div>

     <div class="form-group">
     <label for="Number">  يوم الشركه  </label>
<input type="unmber" class="form-control" id="Number" aria-describedby="Number"
 value="{{ $Event_Company->data }}" name="dd" required minlength="1" disabled>
   </div>



    <select class="form-select" aria-label="Default select example" name="data">
     <?php
             $begin = $event->start_date;
               $end = $event->end_date;
          
               while (strtotime($begin) <= strtotime($end)) {
      
       echo "<option value=$begin>" . $begin . '</option>';
   
      echo  $begin = date ("Y-m-d", strtotime("+1 days", strtotime($begin)));
   }
                         ?>  
                   
   
                                       </select>
    

                                       <br>     
        

        {{-- hidden for user_id --}}

 
    <br>     
      
      
     <button type="submit" class="btn btn-primary">Submit</button>
   </form>



   <script>

   </script>
@endsection