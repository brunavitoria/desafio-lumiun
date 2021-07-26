@extends('adminlte::page')

@section('title', 'Painel Incial')

@section('content_header')
<h1>Painel Incial</h1>
<p>Aqui você pode criar novos livros, editá-los e excluí-los, basta selecionar as opções do menu lateral esquerdo.</p>
@stop

@section('content')
@if(isset($count_livros))
<div class="col-6">
    <!-- small box -->
    <div class="small-box bg-secondary">
        <div class="inner">
            <h3>{{$count_livros}}</h3>

            <p>Livros cadastrados</p>
        </div>
        <div class="icon">
            <i class="ion ion-bag"></i>
        </div>
        <a href="{{route('livros.index')}}" class="small-box-footer">Ver detalhes <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
@endif
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop