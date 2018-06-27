@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">News Feed</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome <span style="color: orange;font-weight: bolder;font-size: 20px;">"{{ Auth::user()->name }}"</span>

                    <br />
                    <a class="btn btn-primary" class="nav-link" href="{{ route('myapp') }}">
                        {{ __('My App') }}
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
