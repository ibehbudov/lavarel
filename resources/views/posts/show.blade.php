@extends('layouts.app')

@section('content')

    <h1><a href="{{route('posts.edit', $post->id)}}">{{$post->title}}</a></h1>

    <h3>{{$post->body}}</h3>

    <img src="{{$post->path}}" alt="">

@endsection