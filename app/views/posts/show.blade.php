@extends('layouts.default')
@section('content')
  <h1>
    {{{ $post->title }}}
  </h1>

  {{{ $post->body }}}
@stop