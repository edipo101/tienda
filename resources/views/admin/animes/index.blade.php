@extends('layouts.admin')

@section('title', 'AkatsukiAdmin | Animes')

@section('content-header')
    <h1>
        Lista de animes
        {{-- <small>Optional description</small> --}}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Animes</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 300px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover table-striped">
                <tbody>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Episodios</th>
                    <th style="width: 150px;">Estado</th>
                    <th>Estreno</th>
                    <th>Audio</th>
                    <th>Géneros</th>
                    <th>Operaciones</th>
                </tr>
                @foreach($animes as $anime)
                <tr>
                  <td>{{$anime->id}}</td>
                  <td><a href="{{route('admin.show', $anime->slug)}}">{{$anime->name}}</a></td>
                  <td>{{$anime->type}}</td>
                  <td>{{$anime->episodes}}</td>
                  <td><span class="label {{setStatus($anime->status)}}">{{$anime->status}}</span></td>
                  <td>{{$anime->premiered}}</td>
                  <td>{{$anime->audio}}</td>
                  <td>{{$anime->genre}}</td>
                  <td>
                    <a href="{{route('admin.show', $anime->slug)}}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Ver </a>
                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Borrar </a>
                  </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="table-footer">
                <span class="">
                        Mostrando {{$animes->count()}} registros de {{$animes->total()}}
                </span>
                <span class="pull-right">{{$animes}}</span>
            </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>

</div>
@endsection