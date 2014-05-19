@extends('layouts.main')

@section('content')

  <h1>Your Items</h1>

  <ul> <small>{<a href="{{ URL::route('new') }}">New Task</a>}</small>
    @foreach ($items as $item)
    
      <li>
        
        {{ Form::open() }}

          <input type="checkbox" 
            onClick="this.form.submit()"
            {{ $item->done ? 'checked' : '' }} />

          <input type="hidden" name="id" value="{{ $item->id }}">

          {{ e($item->name) }} <small>{<a href="{{ URL::route('delete', $item->id) }}">delete</a>}</small>
        {{ Form::close() }}

      </li>
    
    @endforeach
  </ul>

@stop