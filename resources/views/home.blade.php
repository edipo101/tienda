@extends('layouts.web')

@section('title', 'Inicio')

@section('content')
    <div class="mb-2"></div><!-- End .mb-2 -->

    {{-- Banner section --}}
    {{-- @include('partials.banner_categories') --}}

    {{-- Icon boxes --}}
    {{-- @include('partials.icon_boxes') --}}

    {{-- Dvds en estreno --}}
    @include('partials.premiere_carousel')

    @include('partials.banner_1_6')

    {{-- @include('partials.newsletter') --}}

    @include('partials.product_list')

    {{-- @include('partials.blog_post') --}}
@endsection

