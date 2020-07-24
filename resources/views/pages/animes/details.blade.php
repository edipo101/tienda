@extends('layouts.web')

@section('title', 'Detalle producto')

@section('breadcrumb')
    {{-- Barra de navegación --}}
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio  </a></li>
                <li class="breadcrumb-item"><a href="{{route('animes.all')}}">Animes</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
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
                                        <img id="product-zoom" src="{{$product->image}}" alt="product image">
                                        {{-- <img id="product-zoom" src="{{config('app.url')}}/assets/images/products/{{$product->folder_image}}/{{$product->image}}" alt="product image"> --}}
                                    </figure><!-- End .product-main-image -->
                                </div><!-- End .product-gallery -->
                            </div><!-- End .col-md-6 -->

                            <div class="col-md-6">
                                <div class="product-details">
                                    <h1 class="product-title">{{$product->name}}</h1><!-- End .product-title -->

                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 50%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <a class="ratings-text" href="#product-review-link" id="review-link">(2 Comentarios)</a>
                                    </div><!-- End .rating-container -->

                                    <div class="product-price">
                                        Bs {{number_format($product->sale_price, 2)}}
                                    </div><!-- End .product-price -->

                                    <div class="product-content">
                                        {{$product->synopsis}}
                                    </div>

                                    <div class="details-filter-row">
                                        <label for="">Episodios:</label>{{$product->episodes}}
                                    </div>

                                    <div class="details-filter-row">
                                        <label for="">Tipo:</label>{{$product->type}}
                                    </div>

                                    <div class="details-filter-row details-row-size">
                                        <label for="qty">Dvds:</label>2
                                    </div>

                                    <div class="details-filter-row details-row-size">
                                        <label for="qty">Fecha de emisión:</label>{{$product->release_date}}
                                    </div>

                                    <div class="details-filter-row details-row-size">
                                        <label for="qty">Estreno:</label>{{$product->premiered}}
                                    </div>

                                    <div class="details-filter-row">
                                        <div class="product-cat">
                                            <label for="">Categoria:</label>
                                            <a href="#">{{$product->categ_name}}</a>
                                        </div>
                                    </div>

                                    <div class="details-filter-row">
                                        <label for="">Estado:</label>{{$product->status}}
                                    </div>

                                    <div class="details-filter-row">
                                        <label for="">Audio:</label>{{$product->audio}}
                                    </div>

                                    <div class="details-filter-row">
                                        {{-- <div class="product-cat">
                                            <label for="">Géneros:</label>
                                            <a href="#">Comedia</a>,
                                            <a href="#">Romance</a>,
                                            <a href="#">Shonen</a>,
                                            <a href="#">Deporte</a>
                                        </div> --}}
                                        <label for="">Géneros:</label>{{$product->genre}}
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