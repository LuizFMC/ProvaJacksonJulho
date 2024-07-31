@extends('base')
@section('conteudo')
@section('titulo', 'Formulário de empresa')
@php
    if (!empty($dado->id)) {
        $route = route('empresa.update', $dado->id);
    } else {
        $route = route('empresa.store');
    }
@endphp

<h3>Formulário de empresa</h3>
<form action="{{ $route }}" method="post" enctype="multipart/form-data">
    @csrf

    @if (!empty($dado->id))
        @method('put')
    @endif

    <input type="hidden" name="id" value="{{ $dado->id ?? '' }}"><br>

    <label for="">Nome</label><br>
    <input type="text" name="nome" class="form-control" value="{{ old('nome', $dado->nome ?? '') }}"><br>    

    <label for="">Endereço</label><br>
    <input type="text" name="endereco" class="form-control" value="{{ old('endereco', $dado->endereco ?? '') }}"><br>

    <label for="">Telefone</label><br>
    <input type="text" name="telefone" class="form-control" value="{{ old('telefone', $dado->telefone ?? '') }}"><br>

    @php
        $nome_imagem = !empty($dado->imagem) ? $dado->imagem : 'imagens/sem_imagem.jpg';
    @endphp
    <label for="">Imagem</label><br>
    <img src="{{ asset('storage/' . $nome_imagem) }}" width="300px" alt="imagem" />
    <input type="file" name="imagem" class="form-control" /><br>

    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ url('empresa') }}" class="btn btn-primary">Voltar</a>
</form>
@stop