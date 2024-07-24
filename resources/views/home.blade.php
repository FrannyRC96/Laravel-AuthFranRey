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

                    <h1>
                        @if(Auth::check() && Auth::user()->is_admin)
                            Admin Page: You are The Admin.
                        @else
                            User Page: You are a normal user.
                        @endif
                    </h1>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
