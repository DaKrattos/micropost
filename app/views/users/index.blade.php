@extends('layouts.default')
@section('content')
  <h1>Recent users</h1>

  {{ HTML::linkAction('users.create','New user',[],['class'=>'button']) }}

  @foreach($users as $user)
    <div class="row">
      <div class="columns large-11">
        {{ HTML::linkAction('users.show',$user->name . ' ' . $user->lastname,[$user->id],[]) }}<br>
        {{ $user->email }}
      </div>
      <div class="columns large-1">
        {{ HTML::linkAction('users.edit','Edit',[$user->id],['class'=>'button tiny']) }}
        {{ Form::model($user, ['route' => ['users.destroy', $user->id], 'method' => 'DELETE' ]) }}
          {{ Form::button('Destroy', ['type' => 'submit', 'class' => 'tiny alert button'])}}
        {{ Form::close() }}
      </div>
    </div>
    <hr>
  @endforeach
@stop