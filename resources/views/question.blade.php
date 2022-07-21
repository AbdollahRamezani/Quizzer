@extends('master')
@section('content')
    <div class="row">
        <div class="card mx-auto mt-2 shadow">
            <div class="card-header text-center text-danger">
                {{$q->text}}
            </div>
            <div class="card-body">
                <form method="post" action="/check">
                    @foreach($q -> answers as $item)
                        <input type="radio" name="answer" value="{{$item->id}}"> {{$item->text}}
                        <br>
                    @endforeach
                    <input type="hidden" name="id" value="{{$q->id}}">
                    <input type="submit" name="next" value="next" class="btn btn-primary mt-2">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                </form>
            </div>
        </div>

    </div>

@endsection