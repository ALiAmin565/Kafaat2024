@extends('Dashbord.layout.master')
@section('name')
    صفحه اميل الدعم
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
              
                <th> تعديل</th>
            </tr>
        </thead>
        <tbody>
          
            
                <tr>
                   
                    <td>1</td>
                    <td>{{ $email->email }}</td>
                  <td>
                        <form action="{{ route('email.edit', $email->id) }}" style="display: inline">
                            <button class="btn btn-warning">
                                <i class="fa-sharp fa-solid fa-eye"></i> تعديل </button>
                        </form>
                    </td>
                </tr>
            
        </tbody>
    </table>
 






  
@endsection
