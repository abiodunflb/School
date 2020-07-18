@extends('layouts.master')

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

                    <h2>Welcome {{Auth::user()->name}}</h2>
                    <a class="btn btn-success btn-sm" href="{{route('course.index')}}">View Courses</a>
                    <a class="btn btn-info btn-sm" href="{{route('course.create')}}">Add Course</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
