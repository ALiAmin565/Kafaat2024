@extends('Dashbord.layout.master')
@section('name')
    صفحه الملتقي
    <i class="fa-solid fa-home"></i>
@endsection
@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
                <th>الصوره</th>
                <th>العنوان الرئيسي</th>
                {{--  <th> الموضوع</th>  --}}
                <th> تعديل</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($section as $value)
                <tr>
                    <td><img src="{{ asset('SecTwo/' . $value->img) }}" alt="dd" width="70px" height="60px"
                            style="border-radius: 50px"></td>
                    <td>{{ $value->title }}</td>
                    {{--  <td>{{ $value->descrption }}</td>  --}}
                    <td>
                        <form action="{{ route('sectiontwo.show', $value->id) }}" style="display: inline">
                            <button class="btn btn-warning">
                                <i class="fa-sharp fa-solid fa-eye"></i> تعديل </button>
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
@endsection
