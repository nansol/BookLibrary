@extends('layouts.app')

@section('content')
    <div id="welcome">
        <h1>Add Author</h1>
    </div>
    <div class="container">
        <form method="POST" action="{{action('AuthorsController@store')}}">    
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name">
            <br>
            <label for="dob">Year of Birth</label>
            <input type="number" name="dob">
            <br>
            <input type="submit" name=submit>
        </form>
    </div>

@endsection  
