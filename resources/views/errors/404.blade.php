@extends('layouts.app-2')

@section('title', 'Error 404')

@section('breadcrumb')
    {{-- Barra de navegación --}}
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio  </a></li>
                <li class="breadcrumb-item active" aria-current="page">Error 404</li>
            </ol>
        </div>
    </nav>
@endsection

@section('content')
    {{-- Lista contenido --}}
    <div class="error-content text-center" style="background-image: url({{config('app.url')}}/assets/images/backgrounds/error-bg.jpg)">
        <div class="container">
            <h1 class="error-title">Error 404</h1><!-- End .error-title -->
            <p>Lo sentimos, La página que esta solicitando no se encuentra disponible.</p>
            <a href="{{route('home')}}" class="btn btn-outline-primary-2 btn-minwidth-lg">
                <span>Volver a Inicio</span>
                <i class="icon-long-arrow-right"></i>
            </a>
        </div><!-- End .container -->
    </div><!-- End .error-content text-center -->
@endsection()