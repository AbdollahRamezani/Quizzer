@extends('master')
@section('content')

    @if(isset($message))
        <div class="alert alert-success text-center" role="alert">
            {{$message}}
        </div>
        @endif

    <div class="row">
        <div class="card mx-auto mt-2 shadow">
            <div class="card-header text-center text-danger">
               Admin Panel
            </div>
            <div class="card-body">
                <a href="/insert" class="btn btn-warning rounded float-right">insert Question and Answer</a>
            </div>
        </div>
    </div>
@endsection