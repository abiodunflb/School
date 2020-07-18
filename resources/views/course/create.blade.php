@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            
                                @foreach($errors->all() as $error)
                                    {{$error}}

                                @endforeach
                            
                        </div>
                    @endif

                    

            

                    <form action="{{route('course.store')}}" method="POST">
                    @csrf
                        <select name="name" class="form-control form-control-sm">
                            <option value="Introduction To Mathematics(MAT101)">Introduction To Mathematics(MAT101)</option>
                            <option value="Introduction To Psychology(PHY101)">Introduction To Psychology(PHY101)</option>
                            <option value="Introduction To French(FRE101)">Introduction To French(FRE101)</option>
                            <option value="Introduction To Geography(GEO103)">Introduction To Geography(GEO103)</option>
                        </select>

                        <button type="submit" class="btn btn-success btn-sm">Add Course</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
