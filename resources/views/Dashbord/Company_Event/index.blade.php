@extends('Dashbord.layout.master')
@section('name')
    اضافه شركه للايفنت
    <i class="fa-solid fa-home"></i>
@endsection
@section('content')
    <style>
        img {
            width: 50px;
            height: 40px;
            border-radius: 50%
        }
    </style>
    <div class="container-fluid hero-header bg-light " style="background-image: url({{ asset('img/s10.png') }})" >

        <table id="test" class="table table-hover ">
            <thead>
                <tr>
                    <th>#</th>
                    <th>الصوره </th>
                    <th>الاسم</th>
                    <th>اليوم</th>
                    <th>عدد الكراسي</th>
                    <th>الاكشن</th>
                </tr>
            </thead>
            <tbody>


                @foreach ($companys as $company)
                    <form action="{{ route('geet') }}" method="POST" style="display: inline">

                        @csrf
                        <tr class="tr">

                            <td>{{ $company->id }}</td>
                            <td><img src="{{ asset('compoany/' . $company->img) }}" alt="dd"></td>


                            <td>{{ $company->User->name }}</td>
                            @csrf
                            @foreach ($event as $events)
                                {{-- id event --}}
                                <input type="hidden" name="event_id" value="{{ $events->id }} ">
                                {{-- start_date --}}
                                <td>
  <select class="form-select" aria-label="Default select example" name="data">
  <?php
          $begin = $events->start_date;
            $end = $events->end_date;
       
            while (strtotime($begin) <= strtotime($end)) {
   
    echo "<option value=$begin>" . $begin . '</option>';

   echo  $begin = date ("Y-m-d", strtotime("+1 days", strtotime($begin)));
}
                      ?>       

                                    </select>

                                </td>
                                <td> <input type="number" name="numberjoin" value="0"></td>
                                <br>
                                {{-- company_id --}}

                                <input type="hidden" name="company_id" value="{{ $company->id }} ">
                            @endforeach

                            <td>
                                <button id="asd" type="submit" class="btn btn-success">انضم </button>
                            </td>

                    </form>


    </div>


    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
     if($(window).width() < 1000)
{
     $("#amr").hide();
     $("#samir").hide();
     $("#test").attr('class','table table-responsive')
//   alert(1000000);
} else {
   // change functionality for larger screens
}
</script>
@endsection
