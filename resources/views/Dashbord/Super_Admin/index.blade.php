@extends('Dashbord.layout.master')
@section('name')
    صفحه الملتقي
    <i class="fa-solid fa-home"></i>
@endsection
@section('content')

@if (session()->has('massage'))
<div class="alert alert-success">
    {{ session()->get('massage') }}
</div>
@endif
    <table class="table table-hover">
        <thead>
            <tr>
                <th> # </th>
                <th> الاميل </th>
                {{--  <th> الموضوع</th>  --}}
                <th> تعديل</th>
            </tr>
        </thead>
        <tbody>
          
            
                <tr>
                   
                    <td>1</td>
                    <td>{{ $users->email }}</td>
                    {{--  <td>{{ $value->descrption }}</td>  --}}
                    <td>
                        <form action="{{ route('user.edit', $users->id) }}" style="display: inline">
                            <button class="btn btn-warning">
                                <i class="fa-sharp fa-solid fa-eye"></i> تعديل </button>
                        </form>
                    </td>
                </tr>
            
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
@endsection
