@extends('master.master')
@section('container')
    <embed src={{ asset('assets/file/' . $file->file) }} style="width:100vw;height:100vh;"alt="pdf" />
@endsection
