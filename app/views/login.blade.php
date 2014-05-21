@extends('layouts.main')

@section('content')

  @foreach ($errors->all() as $error)
    <p class="error">{{ $error }}</p>
  @endforeach  

    {{ Form::open(array('autocomplete' => 'off')) }}

      <input type="text" name="email" placeholder="Email" />
      <input type="password" name="password" placeholder="Password" />
      <input type="submit" value="Sign In">

    {{ Form::close() }}

@stop
