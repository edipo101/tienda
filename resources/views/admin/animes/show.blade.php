@extends('layouts.admin')

@section('title', 'Anime')

@section('content-header')
<h1>
	{{$anime->name}}
	{{-- <small>Optional description</small> --}}
</h1>
<ol class="breadcrumb">
	<li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
	<li><a href="{{route('admin.index')}}"><i class="fa fa-dashboard"></i> Animes</a></li>
	<li class="active">{{$anime->name}}</li>
</ol>
@endsection

@section('content')

<div class="row">
	<div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Datos generales</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl class="dl-horizontal">
                <dt>Nombre de producto</dt>
                <dd>{{$anime->name}}</dd>
                <dt>Slug</dt>
                <dd>{{$anime->slug}}</dd>
                <dt>Descripción</dt>
                <dd>{{$anime->description}}</dd>
                <dt>Código de barras</dt>
                <dd>{{$anime->barcode}}</dd>
                <dt>Precio anterior</dt>
                <dd>{{$anime->purchase_price}}</dd>
                <dt>Precio de venta</dt>
                <dd>{{$anime->sale_price}}</dd>
              </dl>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-6">
        	<div class="box box-solid">
        		<div class="box-header with-border">
        			<h3 class="box-title">Datos anime</h3>
        		</div>
        		<div class="box-body">
        			<dl class="dl-horizontal">
        				<dt>Tipo</dt>
        				<dd>{{$anime->type}}</dd>
        				<dt>Episodios</dt>
        				<dd>{{$anime->episodes}}</dd>
        				<dt>Estreno</dt>
        				<dd>{{$anime->premiered}}</dd>
        				<dt>Fecha de estreno</dt>
        				<dd>{{$anime->release_date}}</dd>
        				<dt>En estreno?</dt>
        				<dd>{{$anime->premiere}}</dd>
        				<dt>Estado</dt>
        				<dd>{{$anime->status}}</dd>
        				<dt>Audio</dt>
        				<dd>{{$anime->audio}}</dd>
        				<dt>Género</dt>
        				<dd>{{$anime->genre}}</dd>
        			</dl>
        		</div>
        	</div>
        </div>

</div>

<a href="#" class="btn btn-info pull-right">
	<i class="fa fa-pencil"></i> Editar
</a>
@endsection()