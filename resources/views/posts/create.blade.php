@extends('layouts.app')
@section('content')

    <h1>New Post</h1>

    @if(count($errors))
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    @endif

    {!! Form::open([
        'method'    =>  'POST',
        'action'    =>  'PostController@store',
        'files'     =>  'true'
    ]) !!}
    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title') !!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Body') !!}
        {!! Form::text('body') !!}
    </div>

    <div class="form-group">
        {!! Form::file('file', ['class' =>  'form-control']) !!}
    </div>

    {!! Form::submit('New Post') !!}

    {!! Form::close() !!}

@endsection