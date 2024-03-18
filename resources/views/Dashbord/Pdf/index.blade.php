@extends('Dashbord.layout.master')
@section('name')
    صفحه الملتقي
    <i class="fa-solid fa-home"></i>
@endsection
@section('content')
    <table id="test" class="table table-hover">
        <thead>
            <tr>
                <th>العنوان</th>
                <th>الموضوع</th>
                <th>الملف</th>
                <th> تعديل</th>
                <th> حذف</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($files as $value)
                <tr>
                    <td>{{ $value->title }}</td>
                    <td>{{ $value->description }}</td>
                    <td>{{ $value->file }}</td>
                    <td>
                        <form action="{{ route('pdf.show', $value->id) }}" style="display: inline">
                            <button class="btn btn-warning">
                                <i class="fa-sharp fa-solid fa-eye"></i> تعديل </button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('pdf.destroy', $value->id) }}" style="display: inline" method="post">
                            {{ method_field('DELETE') }}
                            @csrf
                            <button class="btn btn-danger my_button" id="button_delete" value="{{ $value->id }}">
                                <i class="fa-sharp fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td </tr>
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
