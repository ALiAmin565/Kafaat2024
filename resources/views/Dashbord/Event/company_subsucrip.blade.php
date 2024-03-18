@extends('Dashbord.layout.master')
@section('name')
    صفحه الشركات  في الملتقي
@endsection
<style>
    img {
        width: 50px;
        height: 40px;
        border-radius: 50%
    }
</style>
@section('content')
    <table id="saad" class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>الصوره</th>
                <th>اسم الايفنت</th>
                <th>اسم الشركه</th>

                <th>موعد الشركه </th>
                <th>مقدم الشركة </th>

                <th>عدد الكراسي </th>


                <th>حذف</th>
                  <th>تعديل</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($subscrips as $subscrip)
                <tr>

                    <td>{{ $subscrip->id }}</td>
                    <td><img src="{{ asset('compoany/' . $subscrip->Company_subscrip->img) }}" alt=""></td>
                    <td>{{ $subscrip->event->name }}</td>
                    <td>{{ $subscrip->Company_subscrip->name }}</td>
                    <td>{{ $subscrip->data }}</td>
                    <td>{{ $subscrip->Company_subscrip->representive }}</td>
                    <td>{{ $subscrip->Company_subscrip->numberAvailiable }}</td>

                    <td>


                        <form action="{{ route('delete_subscrip') }}" style="display: inline" method="post">
                            @csrf
                            <input type="hidden" name="subscrip_id" value="{{ $subscrip->id }}">

                            <input type="hidden" name="company_id" value="{{ $subscrip->Company_subscrip->id }}">

                            <button class="btn btn-danger my_button" id="button_delete">

                                <i class="fa-sharp fa-solid fa-trash"></i>
                            </button>
                        </form>

                    </td>
                    
                     <td>


 <form action="{{ route('update_subscrip',$subscrip->Company_subscrip->id) }}" style="display: inline" method="get">
                         

                            <button class="btn btn-primary my_button" id="button_delete">

                                <i class="fa-solid fa-wrench"></i>
                            </button>
                        </form>

                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>


    <div class="container">
        <div class="row">
            <div class="ahmed">

            </div>
        </div>
    </div>


    <script></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


<script>
     if($(window).width() < 900)
{
     $("#saad").attr('class','table table-responsive')
//   alert(150);
} else {
   // change functionality for larger screens
}
</script>
@endsection
