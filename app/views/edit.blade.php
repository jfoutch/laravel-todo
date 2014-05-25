@extends('layouts.main')

@section('content')

  <h4>Edit Task</h4>

  @foreach ($errors->all() as $error)
    <p class="error">{{ $error }}</p>
  @endforeach  

  {{ Form::open() }}

      <input type="text" name="name" placeholder="Updated Task" />

      <input type="submit" value="Edit" class="btn btn-default" />

  {{ Form::close() }}

  <a href="{{ URL::route('home') }}">back</a>

@stop