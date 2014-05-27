@extends('layouts.main')

@section('content')

  <h4>Edit Item</h4>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($item, array('route' => array('items.update', $item->id), 'method' => 'PUT')) }}

  <div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', null, array('class' => 'form-control')) }}
  </div>


  {{ Form::submit('Edit Item', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

  <a href="{{ URL::route('home') }}">back</a>

@stop