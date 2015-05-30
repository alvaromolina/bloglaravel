Vista de articles:
@extends('layout')
@section('content')
	<h1>Articulos</h1>
	@foreach ($articles as $article)
		<h2><a href="/articles/{{$article->id}}">{{$article->title}}</a></h2>
		<p>{{$article->body}}</p>
		<a href="/articles/{{$article->id}}/edit">Editar</a>
		{!! Form::open(array('route' => array('articles.destroy', $article->id), 'method' => 'delete')) !!}
		<button type="submit" class="btn btn-danger btn-mini">Borrar</button>
		{!! Form::close() !!}
		Usuario: {{($article->user == null) ? 'NA' : $article->user->email}}
		<br>
		@foreach ($article->comments as $comment)
			{{$comment->body}}
			<br>
		@endforeach
		{!! Form::open(['url'=>'comments']) !!}
		<br>
		{!! Form::label('name','Comentario:') !!}
		{!! Form::text('body') !!}
		{!! Form::hidden('article_id', $article->id) !!}
		<br><br>
		{!! Form::submit('Guardar') !!}
		{!! Form::close() !!}



	@endforeach

	<a href="/articles/create">Nuevo</a>
@stop