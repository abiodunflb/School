@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Courses') }} <a class="btn btn-info btn-sm" href="{{route('course.create')}}">Add Course</a></div>
                

                    @if(session()-> has('deleted'))
        
                        <div class="alert alert-danger alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{session()->get('deleted')}}
                        </div>

                    @endif

                    @if(session()-> has('success'))
        
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{session()->get('success')}}
                        </div>

                    @endif

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>                 
                                <th scope="col">Course name</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        @forelse(Auth::user()->courses as $course)
                        <tbody>
                            <tr>
                                <td>{{$course->name}}</td>
                            <td>
                                
                            <form action="{{route('course.destroy', $course->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            </td>
                            </tr>
                        </tbody>

                        @empty

                        No Course found
                        @endforelse
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
