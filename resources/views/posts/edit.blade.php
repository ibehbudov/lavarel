@extends('layouts.app')


@section('content')

    <h1>Edit : {{$post->title}}</h1>

    @if(count($errors) > 0)

        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach

    @endif

        {!! Form::open([
            'method' => 'PATCH',
            'action' => ['PostController@update', $post->id]
        ]) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
    </div>

    <div class="form-group">
        {!! Form::text('title', $post->title) !!}
    </div>

    <div class="form-group">
        {!! Form::label('content', 'Content:') !!}
    </div>

    <div class="form-group">
        {!! Form::textarea('body', $post->body, ['placeholder' => 'Type content']) !!}
    </div>

    {!! Form::submit('Update') !!}
    {!! Form::close() !!}



    {!! Form::open([
            'method' => 'DELETE',
            'action' => ['PostController@destroy', $post->id]
    ]) !!}
    {!! Form::submit('Delete') !!}
    {!! Form::close() !!}


@endsection