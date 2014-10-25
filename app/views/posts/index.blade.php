@extends('layouts.default')
@section('content')
  <h1>Recent Posts</h1>

  {{ HTML::linkAction('posts.create','New post',[],['class'=>'button']) }}

  @foreach($posts as $post)
    <div class="row">
      <div class="columns large-11">
        {{ HTML::linkAction('posts.show',$post->title,[$post->id],[]) }}<br>
        {{ $post->created_at }}
      </div>
      <div class="columns large-1">
        {{ HTML::linkAction('posts.edit','Edit',[$post->id],['class'=>'button tiny']) }}
        {{ Form::model($post, ['route' => ['posts.destroy', $post->id], 'method' => 'DELETE' ]) }}
          {{ Form::button('Destroy', ['type' => 'submit', 'class' => 'tiny alert button'])}}
        {{ Form::close() }}
      </div>
    </div>
    <hr>
  @endforeach
@stop