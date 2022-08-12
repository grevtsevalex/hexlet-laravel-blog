
@extends('layouts.app')

@section('content')
	<article>
  		<header>
   			 <h2>{{ $article->name }}</h2>
  		</header>
  		<section>
    			<p>{{ $article->body }}</p>
  		</section>
	</article>
@endsection
