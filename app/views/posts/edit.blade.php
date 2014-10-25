@extends('layouts.default')
@section('content')
  <h1>Edit Post</h1>
  {{ Form::model($post, array('route' => ['posts.update', $post->id], 'method' => 'PUT') ) }}

    {{ Form::label('title', 'Title') }}
    {{ Form::text('title') }}
    {{ $errors->first('title','<small class="error">:message</small>') }}

    {{ Form::label('body', 'Body') }}
    {{ Form::textarea('body') }}

    {{ Form::label('user_id', 'User') }}
    {{ Form::select('user_id',$users) }}

    {{ Form::submit('Publish',array('class'=>'button')) }}

  {{ Form::close() }}
@stop