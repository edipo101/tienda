@extends('layouts.web')

@section('title', 'Detalle producto')

@section('breadcrumb')
    {{-- Barra de navegación --}}
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio  </a></li>
                <li class="breadcrumb-item"><a href="{{route('animes.all')}}">Animes</a></li>
                <li class="breadcrumb-item active" aria-current="page">No guns life</li>
            </ol>
        </div>
    </nav>
@endsection

@section('content')
    {{-- Lista contenido --}}
    <div class="page-content">
        <div class="container">
            <div class="product-details-top mb-2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-gallery">
                                    <figure class="product-main-image">
                                        <img id="product-zoom" src="{{config('app.url')}}/assets/images/products/animes/product-x.jpg" alt="product image">
                                    </figure><!-- End .product-main-image -->
                                </div><!-- End .product-gallery -->
                            </div><!-- End .col-md-6 -->

                            <div class="col-md-6">
                                <div class="product-details">
                                    <h1 class="product-title">No Guns Life</h1><!-- End .product-title -->

                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <a class="ratings-text" href="#product-review-link" id="review-link">(2 Comentarios)</a>
                                    </div><!-- End .rating-container -->

                                    <div class="product-price">
                                        Bs 70.00
                                    </div><!-- End .product-price -->

                                    <div class="product-content">
                                        <p>El ex soldado Juuzou Inui tiene una pregunta: ¿quién lo convirtió en un cyborg y borró sus recuerdos? Después de la guerra, los soldados cyborg conocidos como Extendidos fueron dados de alta. ¡Juzo Inui es uno de ellos, un hombre cuyo cuerpo fue transformado, su cabeza reemplazada por una pistola gigante!</p>
                                    </div>

                                    <div class="details-filter-row">
                                        <label for="">Episodios:</label>12
                                    </div>

                                    <div class="details-filter-row">
                                        <label for="">Tipo:</label>Serie
                                    </div>

                                    <div class="details-filter-row details-row-size">
                                        <label for="qty">Dvds:</label>2
                                    </div>

                                    <div class="details-filter-row details-row-size">
                                        <label for="qty">Fecha estreno:</label>12/04/2020
                                    </div>

                                    <div class="details-filter-row">
                                        <label for="">Estado:</label>FINALIZADO
                                    </div>

                                    <div class="details-filter-row">
                                        <label for="">Audio:</label>JAPONÉS
                                    </div>

                                    <div class="details-filter-row">
                                        <div class="product-cat">
                                            <label for="">Géneros:</label>
                                            <a href="#">Comedia</a>,
                                            <a href="#">Romance</a>,
                                            <a href="#">Shonen</a>,
                                            <a href="#">Deporte</a>
                                        </div>
                                    </div>

                                    <div class="product-details-footer">
                                        <div class="social-icons social-icons-sm">
                                            <span class="social-label">Compartir:</span>
                                            <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                            <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                            <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                            <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                        </div>
                                    </div><!-- End .product-details-footer -->
                                </div><!-- End .product-details -->
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->
                    </div>

            @include('partials.product_description')

            {{-- <h2 class="title text-center mb-4">You May Also Like</h2> --}}
            {{-- @include('partials.product_relations') --}}

        </div><!-- End .container -->
    </div>
@endsection()