@extends('layouts.app')

@section('content')
    {{ Form::model($article, ['route' => 'articles.store']) }}
    @include('article.form')
    {{ Form::submit('Создать') }}
    {{ Form::close() }}

@if ($errors->any())
	<ul>
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
	</ul>
@endif
@endsection
 
