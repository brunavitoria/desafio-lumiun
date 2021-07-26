@extends('adminlte::page')

@section('title', 'Livros')

@section('content_header')
<ol class="breadcrumb float-right">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="{{ route('livros.index') }}" class="active">Livros</a></li>
</ol>
<h1>Visualizar Livro #{{$livro->id}}</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-outline card-primary">

            <div class="invoice p-3">
                <!-- title row -->
                <div class="row">
                    <div class="col-12">
                        <h4>
                            <i class="fas fa-book"></i> {{$livro->titulo}}
                        </h4>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                        <p>INFORMAÇÕES <br></p>
                        <address>
                            <strong>Editora</strong><br>
                            {{$livro->editora}}
                        </address>
                        <address>
                            <strong>Autor(es)</strong><br>
                            {{$livro->autor}}
                        </address>
                        <address>
                            <strong>Gênero</strong><br>
                            {{$livro->genero}}
                        </address>
                        <address>
                            <strong>Número de páginas</strong><br>
                            {{$livro->nro_paginas}}
                        </address>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.invoice -->
            <div class="card-footer">
                <a href="{{route('livros.index')}}" class="btn btn-default btn-sm">
                    <i class="fas fa-chevron-left"></i>
                    Voltar
                </a>
            </div>
        </div>
        <!-- /.card -->
    </div>
</div>
@stop