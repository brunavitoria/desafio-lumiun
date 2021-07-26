@extends('adminlte::page')

@section('title', 'Livros')

@section('content_header')
<ol class="breadcrumb float-right">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="{{ route('livros.index') }}" class="active">Livros</a></li>
</ol>
<h1>Editar Livro</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-outline card-warning">
            <div class="card-header">
                <h3 class="card-title">Editando Livro</h3>
            </div>
            {{ Form::model($livro, ['route' => ['livros.update', $livro], 'method' => 'PATCH', 'files'=>true]) }}
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        {!! Form::label('titulo', 'Título', ['class' => 'control-label']) !!}
                        {!! Form::text('titulo', null, ['class' => 'form-control', 'placeholder' => 'Informe o título do livro', 'required' => 'required']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::label('editora', 'Editora', ['class' => 'control-label']) !!}
                        {!! Form::text('editora', null, ['class' => 'form-control', 'placeholder' => 'Informe a editora do livro', 'required' => 'required']) !!}
                    </div>
                    <div class="form-group col-md-5">
                        {!! Form::label('autor', 'Autor(es)', ['class' => 'control-label']) !!}
                        {!! Form::text('autor', null, ['class' => 'form-control', 'placeholder' => 'Informe o(s) autor(es) do livro', 'required' => 'required']) !!}
                    </div>
                    <div class="form-group col-md-5">
                        {!! Form::label('genero', 'Gênero', ['class' => 'control-label']) !!}
                        {!! Form::text('genero', null, ['class' => 'form-control', 'placeholder' => 'Informe o gênero do livro', 'required' => 'required']) !!}
                    </div>
                    <div class="form-group col-md-2">
                        {!! Form::label('nro_paginas', 'Número de Páginas', ['class' => 'control-label']) !!}
                        {!! Form::number('nro_paginas', null, ['class' => 'form-control', 'placeholder' => 'Informe o número de páginas do livro', 'required' => 'required']) !!}
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <a href="{{route('livros.index')}}" class="btn btn-default btn-sm">
                    <i class="fas fa-chevron-left"></i>
                    Voltar
                </a>
                <button class="btn btn-success btn-sm float-right">
                    <i class="far fa-save"></i>
                    Salvar
                </button>
            </div>
            {{ Form::close() }}
        </div>
        <!-- /.card -->
    </div>
</div>
@stop