@extends('layouts.app')

@section('content')
    
    <h1>Posts in database</h1>

    <a href="{{route('posts.create')}}">Add post</a>
    <br>
    <br>
    
    @foreach($posts as $post)

        @if($post->deleted_at)
            <li><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a>
                <a href="/posts/restore/{{$post->id}}">Restore</a> </li>
        @else
            <li><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></li>
        @endif

    @endforeach
    
    
@endsection    