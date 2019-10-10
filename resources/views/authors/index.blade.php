@extends('layouts.app')

@section('content')
    <div id="welcome">
        <h1>Authors:</h1>
    </div>
    <table>
        <tr><th>Name</th><th>Year of Birth</th></tr>
        @foreach ($authors as $author)
        <tr>
            <td>{{ $author['name'] }}</td>
            <td>{{ $author['dob']}}</td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="/authors/create">Add Author</a>
    </div>

@endsection  
