@extends('Dashbord.layout.master')
@section('name')
 صفحه الملتقي
<i class="fa-solid fa-home"></i>
@endsection
@section('content')
 
@if(session()->has('ahmed'))
<div class="alert alert-success">
    {{ session()->get('ahmed') }}
</div>
@endif
<table id="test" class="table table-hover ">
     <thead>
       <tr>
         <th>#</th>
         <th>الصوره</th>
         <th>الاسم</th>

         <th>وقت التسجيل</th>
         <th>وقتالانهاء</th>
         <th>الاكشن</th>
       </tr>
     </thead>
     <tbody>
    
          @foreach ($events as $event )
          <tr>   
          
          <td>{{ $event->id }}</td>
          <td><img src="{{ asset('Event/'.$event->img ) }}" alt="dd" width="70px" height="60px" style="border-radius: 50px"></td>
          <td>{{ $event->name }}</td>
          <td>{{ $event->start_date }}</td>
          <td>{{ $event->end_date }}</td>
        

 




          <td>
     <form action="{{ route('event.show',$event->id) }}" style="display: inline">
                    <button class="btn btn-warning"> 
                         <i class="fa-sharp fa-solid fa-eye"></i>                    </button>
               </form>

               <form action="{{ route('event.edit',$event->id) }}" style="display: inline">
                    <button class="btn btn-primary">
                         <i class="fa-solid fa-wrench"></i>
                    </button>
               </form>
{{-- dangerdangerdangerdangerdangerdangerdangerdangerdangerdangerdangerdangerdanger --}}

<form action="{{ route('event.destroy',$event->id) }}" style="display: none" method="post">
     {{ method_field('DELETE') }}
 
     @csrf

                 
<button class="btn btn-danger my_button" id="button_delete" value="{{ $event->id }}" >
     <i class="fa-sharp fa-solid fa-trash"></i>
                    </button>
               </form>
               {{-- هات كل الشركات اللي مشتركه ف الايفنت --}}

               <form action="{{ route('subscrip_event',$event->id) }}"  style="display: inline" >
                 
                 
               
     
               <button class="btn btn-info my_button" id="button_delete" value="{{ $event->id }}" >
                    <i class="fa-solid fa-building"></i>                                   </button>
                              </form>
          </td>
     </tr>
     @endforeach
     </tbody>
   </table>
 </div>



 



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 
 {{-- <script type="text/javascript">
     $(document).ready(function() {

         $('.my_button').click(function(event) {



 

            Swal.fire({
   title: 'Are you sure?',
   text: "You won't be able to revert this!",
   icon: 'warning',
   showCancelButton: true,
   confirmButtonColor: '#3085d6',
   cancelButtonColor: '#d33',
   confirmButtonText: 'Yes, delete it!'
 }).then((result) => {
   if (result.isConfirmed) {
 
 
     var xx=$("#delete").attr('onsubmit');

      xx.html("Hello world!");

      alert(xx);
     
   }
 })
          
       
 
      });
 
 
  }) --}}
 
 
 
{{--    
    </script> --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
     if($(window).width() < 1000)
{
     $("#amr").hide();
     $("#samir").hide();
     $("#test").attr('class','table table-responsive')
//   alert(150);
} else {
   // change functionality for larger screens
}
</script>
@endsection






