@extends('layouts.app')

@section('content')
    <br>
    <a class="btn btn-default" href="/" title="">Back</a>
            <h1><a href="todos/{{ $todo->id }}">{{ $todo->text }}</a> </h1>
            <div class="label label-danger">{{ $todo->due }}</div>
            <hr>
            <p>{{ $todo->body }}</p>
            <br>
            <a href="/todos/{{ $todo->id }}/edit" class="btn btn-default" title="">Edit</a>
            {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
                {{ Form::hidden('_method', 'DELETE') }}
            {!! Form::close() !!}
@endsection