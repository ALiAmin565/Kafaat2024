@extends('Dashbord.layout.master')
@section('name')
 صفحه الشركات
<i class="fa-solid fa-home"></i>
@endsection
@section('content')

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
@if(session()->has('danger'))
    <div class="alert alert-danger">
        {{ session()->get('danger') }}
    </div>
@endif
<table id="test" class="table table-hover ">
     <thead>
       <tr>
         <th>#</th>
         <th>الاسم</th>
         <th id="samir">الاميل</th>
         <th> الصوره   </th>
         <th>الاكشن</th>
       </tr>
     </thead>
     <tbody>

          @foreach ($companys as $company )
          <tr>

          <td>{{ $company->id }}</td>
          <td>{{ $company->User->name }}</td>
          <td id="amr">{{ $company->User->email }}</td>
          <td><img src="{{ asset('compoany/'.$company->img ) }}" alt="dd" width="100px" height="100px"></td>






          <td>
     <form action="{{ route('Company.show',$company->id) }}" style="display: inline">
                    <button class="btn btn-warning">
                         <i class="fa-sharp fa-solid fa-eye"></i>                    </button>
               </form>

               <form action="{{ route('Company.edit',$company->id) }}" style="display: inline">
                    <button class="btn btn-primary">
                         <i class="fa-solid fa-wrench"></i>
                    </button>
               </form>
{{-- dangerdangerdangerdangerdangerdangerdangerdangerdangerdangerdangerdangerdanger --}}
<form action="{{ route('Company.destroy',$company->id) }}" style="display: inline" method="post">
     <input type="hidden" name="user_id" value="{{$company->user_id  }}">

     {{ method_field('DELETE') }}

     @csrf


<button class="btn btn-danger my_button" id="button_delete" value="{{ $company->id }}" >
     <i class="fa-sharp fa-solid fa-trash"></i>
                    </button>
               </form>
               
               
               
               {{-- dangerdangerdangerdangerdangerdangerdangerdangerdangerdangerdanger --}}
          </td>
  
     </tr>
     @endforeach
     </tbody>
   </table>
 </div>

      <div class="d-flex justify-content-center">
    {!! $companys->links() !!}
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
     if($(window).width() < 767)
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






