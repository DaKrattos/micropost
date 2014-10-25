@extends('layouts.default')
@section('content')
  <h1>Create Post</h1>
  {{ Form::open(array('route' => 'posts.store')) }}

    {{ Form::label('title', 'Title') }}
    {{ Form::text('title') }}

    {{ Form::label('body', 'Body') }}
    {{ Form::textarea('body') }}

    {{ Form::submit('Publish',array('class'=>'button')) }}

  {{ Form::close() }}
@stop