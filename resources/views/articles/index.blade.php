Vista de articles:
@extends('layout')
@section('content')
	<h1>Articulos</h1>
	@foreach ($articles as $article)
		<h2><a href="/articles/{{$article->id}}">{{$article->title}}</a></h2>
		<p>{{$article->body}}</p>
	@endforeach
@stop