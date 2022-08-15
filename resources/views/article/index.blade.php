@extends('layouts.app')
	@section('content')
                @foreach ($articles as $article)
                        <a href="/articles/{{ $article->id }}"><h2>{{$article->name}}</h2></a>
			<p>{{$article->body}}</p>
			<a href="/articles/{{ $article->id }}/edit">Редактировать</a>
                @endforeach
        @endsection
