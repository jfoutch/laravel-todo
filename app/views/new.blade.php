@extends('layouts.main')

@section('content')

  <h4>Create New Task</h4>

  @foreach ($errors->all() as $error)
    <p class="error">{{ $error }}</p>
  @endforeach  

  {{ Form::open() }}

      <input type="text" name="name" placeholder="The name of your task" />

      <input type="submit" value="Create" class="btn btn-default" />

  {{ Form::close() }}

  <a href="{{ URL::route('home') }}">back</a>

@stop