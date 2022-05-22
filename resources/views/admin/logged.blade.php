@extends('layouts.front')

@section('title')
BigScreen - Administration
@endsection
{{--Page vous êtes connecté--}}
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-3">
                <div class="card-header text-center">{{ __('Dashboard') }}</div>
                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/setTime.js')}}"></script>
@endsection
