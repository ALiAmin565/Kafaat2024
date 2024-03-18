@extends('Dashbord.layout.master')
@section('name')
    صفحه الملتقي
    <i class="fa-solid fa-home"></i>
@endsection
@section('content')
    <div class="col-sm-12">

        الاسم :
        <br>
        {{ $event->name }}
        <hr>
    </div>
    <div class="col-sm-12">

        موقع الملتقي 
        <br>
       <a href=" {{ $event->location }}">
    <img src="https://avatars.mds.yandex.net/i?id=32306cacacc051ea144da9f1f6633e25aaaf343e-3322855-images-thumbs&n=13" alt="" width="100px">
    </a>
        <hr>
    </div>
    <div class="col-sm-12">

صوره الايفنت 
        <br>
       
        <img src="{{ asset('Event/'.$event->img ) }}" alt="dd" width="100px" height="100px">

        <hr>
    </div>



  
         <div class="col-sm-12">

           نبذه عن الملتقي
                  <br>
                 
                  {{ $event->descrption }}
          
           
                  <hr>
              </div>



              
    {{-- </div> --}}
@endsection
