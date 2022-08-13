@extends('layouts.app')

@section('content')
    {{ Form::model($article, ['route' => 'articles.store']) }}
    {{ Form::label('name', 'Название') }}
    {{ Form::text('name') }}<br>
    {{ Form::label('body', 'Содержание') }}
    {{ Form::textarea('body') }}<br>
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
 