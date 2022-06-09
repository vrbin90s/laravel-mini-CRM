@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><span>{{ __('Dashboard') }}</span><span class="notification-msg">{{ __('Hi there! You are logged in!') }}</span> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    

                    <img class="dash-img" src="{{ asset('28.jpg') }}" />
                    <br>
                    <p style="text-align: center;">The current Laravel version is {{ app()->version() }}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
