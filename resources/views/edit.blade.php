@extends('layout.app')
@section('content')



    <div class="container p-3 mb-2 bg-light text-dark" style="width: 500px">
        <form action="{{Route('update',$task->id)}}"  method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="email">name:</label>
                <input type="text" class="form-control" value="{{$task->name}}" name="name">
            </div>
            <button type="submit" class="btn btn-primary " style="margin-top: 20px ; margin-left: 200px ;">Submit</button>
        </form>
    </div>


@endsection
