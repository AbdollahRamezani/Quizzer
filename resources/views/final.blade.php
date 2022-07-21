@extends('master')
@section('content')
    <a href="/" class="btn btn-warning rounded float-right">HOME</a>

    <div class="row">
        <div class="card mx-auto mt-2 shadow">
            <div class="card-header text-center text-danger">
                Report Card
            </div>
            <div class="card-body">
                <h5 class="card-title text-center">Your Points:</h5>
                <h1 class="card-text text-center text-info">{{Session::get('score')}}</h1>
            </div>
        </div>
    </div>
@endsection