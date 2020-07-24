@extends('layouts.app')

@section('title', 'Editar anime')

@section('content')
	<h1>Editar anime</h1>
	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	<form action="{{ route('animes.update', $anime->id) }}" method="POST">
		<input name="_method" type="hidden" value="PATCH">
		@include('animes._form')
	</form>
	{{ var_dump($anime) }}
@endsection()
