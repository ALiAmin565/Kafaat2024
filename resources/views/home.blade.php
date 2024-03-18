@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}

                        <div class="visible-print text-center">
                            {!! QrCode::size(250)->generate(Auth::user()->qr_code) !!}

                            <h2 class="mt-4">{{ Auth::user()->qr_code }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
