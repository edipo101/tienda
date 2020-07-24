@extends('layouts.web')

@section('title', 'Artículos')

@section('breadcrumb')
    {{-- Barra de navegación --}}
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{route('articles.all')}}">Artículos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Todos</li>
            </ol>
        </div>
    </nav>
@endsection

@section('content')
    {{-- Lista contenido --}}
    <div class="page-content">
        <div class="container">
            <h2 class="title text-center mb-3">Lista de artículos</h2>
            <div class="toolbox">
                <div class="toolbox-left">
                    <a href="#" class="sidebar-toggler"><i class="icon-bars"></i>Filtros</a>
                </div>
                <div class="toolbox-center">
                    <div class="toolbox-info">
                        Mostrando <span>{{$products->count()}} de {{$products->total()}}</span> Artículos
                    </div>
                </div><!-- End .toolbox-center -->

                <div class="toolbox-right">
                    <div class="toolbox-sort">
                        <label for="sortby">Ordenar por:</label>
                        <div class="select-custom">
                            <select name="sortby" id="sortby" class="form-control">
                                <option value="popularity" selected="selected">Most Popular</option>
                                <option value="rating">Most Rated</option>
                                <option value="date">Fecha</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div><!-- End .toolbox -->

            <div class="products">
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-6 col-md-4 col-lg-4 col-xl-2">
                        <div class="product">
                            <figure class="product-media">
                                @if($product->premiere == 1)
                                <span class="product-label label-new">Estreno</span>
                                @endif
                                <a href="product.html">
                                    {{-- <img src="/assets/images/products/product-{{rand(1,10)}}.jpg" alt="Product image" class="product-image"> --}}
                                    <img src="{{config('app.url')}}/assets/images/products/{{$product->folder_image}}/{{$product->image}}" alt="Product image" class="product-image">
                                </a>
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">{{$product->categ_name}}</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">{{$product->name}}</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    Bs {{number_format($product->sale_price, 2)}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <nav aria-label="Page navigation">
                    {{$products->appends(Request::all())->links()}}
                </nav>
            </div>

            <div class="sidebar-filter-overlay"></div>
            @include('partials.sidebar_filter')
        </div>
    </div>
@endsection()