@extends('layouts.app')

@section('content')
    <div class="container">      
        <h1>{{$book->name}} </h1>
        <h4><small>written by: </small>{{$book->author}}</h4>
        <small>ISBN {{$book->isbn}}</small>
        <br>
        <img src="{{ $book->cover}}" height="600" width="400">
    </div>

@endsection  
