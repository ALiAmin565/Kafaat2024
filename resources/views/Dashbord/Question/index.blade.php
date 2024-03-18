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
                <th>   عنوان الشاركه الرعاه</th>
                {{--  <th> الموضوع</th>  --}}
                <th> تعديل</th>
            </tr>
        </thead>
        <tbody>

                 <tr>
                    {{--  @dd($section->img);  --}}
                     <td><img src="{{ asset('Setting/1676055853.jpg') }}" alt="dd" width="70px" height="60px"
                            style="border-radius: 50px"></td>
                    <td>{{ $setting->artical }}</td>
                    {{--  <td>{{ $setting->descrption }}</td>  --}}
                    <td>
                        <form action="{{ route('setting.edit', $setting->id) }}" style="display: inline">
                            <button class="btn btn-warning">
                                <i class="fa-sharp fa-solid fa-eye"></i> تعديل </button>
                        </form>
                    </td>
                </tr>
         
        </tbody>
    </table>
    </div>






 
@endsection