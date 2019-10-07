@extends('layouts.app')

@section('content')
    <div id="welcome">
        <h1>Welcome to My Library!</h1>
    </div>
    <table>
        <tr><th>Author</th><th>Name</th><th>Cover</th><th>ISBN</th></tr>
        @foreach ($books as $book)
        <tr>
            <td>{{$book->author}}</td>
            <td>{{ $book->name }}</td>
            <td><img src="{{ $book->cover}}" height="42" width="42"></td>
            <td>{{ $book->isbn}}</td>
        </tr>
        @endforeach
    </table>
@endsection  
