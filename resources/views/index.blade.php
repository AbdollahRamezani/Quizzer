@extends('master')
@section('content')
    <div class="row">
        <div class="card mx-auto mt-2 shadow">
            <div class="card-header text-center text-danger">
               Quizzer
            </div>
            <div class="card-body">
                <h5 class="card-title text-center">WellCome</h5>
                <p class="card-text">You will get 1 point for each correct answer. At the end of the Quiz, your
                    total score will be displayed. Maximum score is 40 points.</p>
                <a href="/question/1" class="btn btn-success rounded">START</a>
            </div>
        </div>

    </div>
    @endsection