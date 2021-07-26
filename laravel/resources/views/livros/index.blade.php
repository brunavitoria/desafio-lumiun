@extends('adminlte::page')

@section('title', 'Livros')

@section('content_header')
<ol class="breadcrumb float-right">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="{{ route('livros.index') }}" class="active">Livros</a></li>
</ol>
<h1>Livros</h1>
<a href="{{ route('livros.create') }}" class="btn btn-primary btn-sm">
    <i class="fas fa-plus-circle"></i>
    Adicionar Livro
</a>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Listagem de Livros</h3>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive" style="max-height: 300px;">
                @if(isset($livros))
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Autor</th>
                            <th>Gênero</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($livros as $livro)
                        <tr>
                            <td>{{$livro->id}}</td>
                            <td>{{substr($livro->titulo, 0, 30)}}...</td>
                            <td>{{$livro->autor}}</td>
                            <td><span class="tag tag-success">{{$livro->genero}}</span></td>
                            <td>
                            {!! Form::open(['url' => [route('livros.destroy', $livro)], 'method' => 'DELETE' ]) !!}
                                <a href="{{ route('livros.edit', $livro) }}"
                                   class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="{{ route('livros.show', $livro) }}"
                                   class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip"
                                        title="Excluir">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <div class="container">
                    <div class="callout callout-info">
                        <h5>Nenhum livro cadastrado!</h5>

                        <p>Clique em cadastrar para cadastrar um novo.</p>
                    </div>
                    <p></p>
                </div>
                @endif
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
@stop