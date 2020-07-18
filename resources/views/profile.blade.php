@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h3>Name: {{Auth::user()->name}}</h3>
                    <h3>Matric Number: {{Auth::user()->matricNo}}</h3>
                    <h3>Email: {{Auth::user()->email}}</h3>
                    <h3>Phone: {{Auth::user()->phone}}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
