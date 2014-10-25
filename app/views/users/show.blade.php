@extends('layouts.default')
@section('content')
  <h1>
    {{{ $user->name . ' ' . $user->lastname }}}
  </h1>

  {{{ $user->email }}}
@stop