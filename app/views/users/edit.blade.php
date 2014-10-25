@extends('layouts.default')
@section('content')
  <h1>Edit User</h1>
  {{ Form::model($user, array('route' => ['users.update', $user->id], 'method' => 'PUT') ) }}

    {{ Form::label('name', 'name') }}
    {{ Form::text('name') }}
    {{ $errors->first('name','<small class="error">:message</small>') }}

    {{ Form::label('lastname', 'lastname') }}
    {{ Form::text('lastname') }}
    {{ $errors->first('lastname','<small class="error">:message</small>') }}

    {{ Form::label('email', 'email') }}
    {{ Form::text('email') }}
    {{ $errors->first('email','<small class="error">:message</small>') }}

    {{ Form::submit('Update',array('class'=>'button')) }}

  {{ Form::close() }}
@stop