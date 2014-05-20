@extends('layouts.main')

@section('content')

  <h4>Your Items</h4>

  <ul> <small><a href="{{ URL::route('new') }}">Create New Task</a></small>
    @foreach ($items as $item)
    
      <li>
        
        {{ Form::open() }}

          <input type="checkbox" 
            onClick="this.form.submit()"
            {{ $item->done ? 'checked' : '' }} />

          <input type="hidden" name="id" value="{{ $item->id }}">

          {{ e($item->name) }} <small class="delete"><a href="{{ URL::route('delete', $item->id) }}">X</a></small>
        {{ Form::close() }}

      </li>
    
    @endforeach
  </ul>

@stop