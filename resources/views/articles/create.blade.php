@extends('layout')
@section('content')
{!! Form::open(['url'=>'articles']) !!}
{!! Form::label('name','Title:') !!}
{!! Form::text('title') !!}
<br>
{!! Form::label('name','Body:') !!}
{!! Form::text('body') !!}
<br><br>
{!! Form::submit('Guardar') !!}
{!! Form::close() !!}
@stop