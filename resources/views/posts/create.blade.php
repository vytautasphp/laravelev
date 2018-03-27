@extends('layouts.app')


@section('content')

<h1>Create Posts</h1>

    <form method="POST" action="/posts">

        {{csrf_field()}}
        
        <input type="text" name="title" placeholder="Enter title">
        

        <input type="submit" name="submit">




    </form>

@endsection

