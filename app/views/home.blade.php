@extends('layouts.main')

@section('content')

  <h4>Your Items</h4>

  <ul> <small class="new"><a href="{{ URL::route('new') }}">Create New Task</a></small>
    @foreach ($items as $item)
    
      <li>
        
        {{ Form::open() }}

          <input type="checkbox" class="chkbox"
            onClick="this.form.submit()"
            {{ $item->done ? 'checked' : '' }} />

          <input type="hidden" name="id" value="{{ $item->id }}">
           <span class="{{ ($item->done)? 'strike' : null; }}">{{ e($item->name) }}</span>
           <small class="delete"><a href="{{ URL::route('delete', $item->id) }}">x</a></small>
           
        {{ Form::close() }}

      </li>
    
    @endforeach
  </ul>

@stop