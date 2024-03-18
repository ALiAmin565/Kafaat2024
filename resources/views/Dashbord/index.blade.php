@extends('Dashbord.layout.master')
@section('name')
 الصفحه الرئيسيه
<i class="fa-solid fa-home"></i>
@endsection
@section('content')



        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3></h3>

                <p>الشركات</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('Company.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><sup style="font-size: 20px"></sup></h3>

                <p>المواتمر </p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ route('event.index') }}" class="small-box-footer"> اضغط هنا   <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3></h3>

                <p>اضف شركات للمواتمر</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{ route('company_event') }}" class="small-box-footer">اضغط هنا  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        </div>


  @endsection
