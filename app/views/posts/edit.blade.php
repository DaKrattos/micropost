@extends('layouts.default')
@section('content')
  <h1>Edit Post</h1>
  {{ Form::model($post, array('route' => ['posts.update', $post->id], 'method' => 'PUT') ) }}

    {{ Form::label('title', 'Title') }}
    {{ Form::text('title') }}

    {{ Form::label('body', 'Body') }}
    {{ Form::textarea('body') }}

    {{ Form::submit('Publish',array('class'=>'button')) }}

  {{ Form::close() }}
@stop