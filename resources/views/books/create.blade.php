@extends('layouts.app')

@section('content')
    <div id="welcome">
        <h1>Add Book</h1>
    </div>
    <div class="container">
        <form method="POST" action="{{action('BooksController@store')}}">    
            @csrf
            <label for="author">Author</label>
            <input type="text" name="author">
            <br>
            <label for="name">Name</label>
            <input type="text" name="name">
            <br> 
            <label for="edition">Edition</label>
            <input type="text" name="edition">
            <br>
            <label for="cover">Cover</label>
            <input type="file" name="cover">
            <br>
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn">
            <br>
            <input type="submit" name=submit>
        </form>
    </div>

@endsection  
