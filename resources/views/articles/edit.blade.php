@extends('layout')
@section('content')
{!! Form::model($article, ['method'=>'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
{!! Form::label('name','Title:') !!}
{!! Form::text('title') !!}
<br>
{!! Form::label('name','Body:') !!}
{!! Form::text('body') !!}
<br><br>
{!! Form::submit('Guardar') !!}
{!! Form::close() !!}
@stop