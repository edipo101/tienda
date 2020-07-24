@extends('layouts.app')

@section('title', 'Crear anime')

@section('content')
	<h1>Crear anime</h1>
	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	<form action="{{ route('animes.store') }}" method="POST">
		@include('animes._form')
	</form>
@endsection()
