@extends('layouts.app')

@section('content')
  <h1>Create Todo</h1>
  {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
    {{ Form::bsText('custumer_id') }}
    {{ Form::bsText('custumer_name') }}
    {{ Form::bsText('username') }}
    {{ Form::bsText('password') }}
    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
  {!! Form::close() !!}
@endsection
