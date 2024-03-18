@extends('Dashbord.layout.master')
@section('name')
 صفحه الشركات المعلقه
<i class="fa-solid fa-home"></i>
@endsection
@section('content')
  

<table id="test" class="table table-hover">
     <thead>
       <tr>
         <th>#</th>
         <th>الاسم</th>
         <th>الاميل</th>
         <th> الصوره  </th>
         <th>الاكشن</th>
       </tr>
     </thead>
     <tbody>
    
          @foreach ($companys as $company )
          <tr>   
          
          <td>{{ $company->id }}</td>
          <td>{{ $company->User->name }}</td>
          <td>{{ $company->User->email }}</td>
          <td><img src="{{ asset('compoany/'.$company->img ) }}" alt="dd" width="100px" height="100px"></td>

 




          <td>
            <form action="{{ route('abrove_show',$company->id) }}" style="display: inline">
                    <button class="btn btn-warning">
                         <i class="fa-sharp fa-solid fa-eye"></i>
                    </button>
               </form>

               <form action="{{ route('abrove_update',$company->id) }}" method="POST" style="display: inline">
                    @csrf
                    <button class="btn btn-success">
                        تفعيل

                    </button>
               </form>

       
               
                      <form action="{{ route('abrove_destroy',$company->id) }}" method="post"style="display: inline">     
                         @csrf
               <button class="btn btn-danger my_button" id="button_delete" >
                    <i class="fa-sharp fa-solid fa-trash"></i>
                                   </button>
                              </form> 
          </td>
     </tr>
     @endforeach
     </tbody>
   </table>
 </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


<script>
     if($(window).width() < 767)
{
     $("#test").attr('class','table table-responsive')
//   alert(150);
} else {
   // change functionality for larger screens
}
</script>


@endsection