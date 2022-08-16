
@extends('layouts.app')

@section('content')
	<article>
  		<header>
   			 <h2>{{ $article->name }}</h2>
  		</header>
  		<section>
    			<p>{{ $article->body }}</p>
  		</section>
		{{Form::open(array('url' => "articles/{$article->id}", 'method' => 'delete'))}}
		{{Form::submit('Удалить')}}
		{{Form::close()}}	
	</article>
@endsection
