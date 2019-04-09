@extends('layouts.app')

@section('content')
  <a class="btn btn-default" href="/todo/{{$todo->id}}">Go Back</a>
  <h1>Edit Todo</h1>
  {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST']) !!}
    {{ Form::bsText('custumer_id', $todo->custumer_id) }}
    {{ Form::bsText('custumer_name', $todo->custumer_name) }}
    {{ Form::bsText('username', $todo->username) }}
    {{ Form::bsText('password', $todo->password) }}

    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
  {!! Form::close() !!}
@endsection
