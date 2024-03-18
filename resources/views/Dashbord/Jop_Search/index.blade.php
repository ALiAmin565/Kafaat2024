@extends('Dashbord.layout.master')
@section('name')
صفحة الباحثين عن العمل
<i class="fa-solid fa-home"></i>
@endsection
@section('content')

@if (Session()->has('massage'))
<div class="alert alert-success">
    {{ Session()->get('massage') }}
    <ul>
        
    </ul>
</div>
@endif
    <table class="table table-hover" id="test">
        <thead>
            <tr>
                <th>#</th>
                
                <th>الاسم</th>
          

                <th class="amr" >الاميل</th>
              
              
                <th>الاكشن</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($Securitys as $Security)
                <tr>

                    <td>{{ $Security->id }}</td>
                     
                    <td >{{ $Security->name }}</td>
                    <td class="amr" >{{ $Security->email }}</td>
                   
              

                    <td>
                        
                        
     <form action="{{ route('user_serach_show',$Security->id) }}" style="display: inline">
                    <button class="btn btn-warning">
                         <i class="fa-sharp fa-solid fa-eye"></i>                    </button>
               </form>


               <form action="{{route('user_serach_edit',$Security->id)}}" style="display: inline">
                    
                    <button class="btn btn-primary">
                         <i class="fa-solid fa-wrench"></i>
                    </button>
               </form>
{{-- dangerdangerdangerdangerdangerdangerdangerdangerdangerdangerdangerdangerdanger --}}
<form action="{{ route('user_serach_delete',$Security->id) }}" style="display: inline" method="post">
     <input type="hidden" name="user_id" value="{{$Security->user_id  }}">

 

     @csrf


<button class="btn btn-danger my_button" id="button_delete" value="{{ $Security->id }}" >
     <i class="fa-sharp fa-solid fa-trash"></i>
                    </button>
               </form>
               
               
               
               {{-- dangerdangerdangerdangerdangerdangerdangerdangerdangerdangerdanger --}}
          </td>
                </tr>
            @endforeach
        </tbody>
    </table>
         <div class="d-flex justify-content-center" style="  width: 20%;">
    {!! $Securitys->links() !!}
</div>
 </div>
 </div> 
 <style>
     /**{border: 2px solid;}*/
     .pagination {
  padding-left: 0;
  list-style: none;
  flex-direction: row-reverse;
}

.pagination > li {
  display: inline-block;
}
 </style>

        </script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
     if($(window).width() < 767)
{
     $(".amr").hide();
     $("#samir").hide();
     $("#test").attr('class','table table-responsive')
//   alert(150);
} else {
   // change functionality for larger screens
}
</script>
@endsection
