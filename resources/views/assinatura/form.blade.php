@extends('base')
@section('conteudo')
@section('titulo', 'Formulário de assinatura')
@php
    if (!empty($dado->id)) {
        $route = route('assinatura.update', $dado->id);
    } else {
        $route = route('assinatura.store');
    }
@endphp

<h3>Formulário de assinatura</h3>
<form action="{{ $route }}" method="post">

    @csrf

    @if (!empty($dado->id))
        @method('put')
    @endif

    <input type="hidden" name="id"
        value="@if (!empty($dado->id)) {{ $dado->id }}@else{{ '' }} @endif"><br>

    
    <label for="">Nome</label><br>
    <input type="text" name="nome" class="form-control"
        value="@if (!empty($dado->nome)) {{ $dado->nome }}@elseif (!empty(old('nome'))){{ old('nome') }}@else{{ '' }} @endif"><br>    

    <label for="">Preço</label><br>
    <input type="text" name="preco" class="form-control"
        value="@if (!empty($dado->preco)) {{ $dado->preco }}@elseif (!empty(old('preco'))){{ old('preco') }}@else{{ '' }} @endif"><br>

    <label for="">Duração</label><br>
    <input type="text" name="duracao" class="form-control"
        value="@if (!empty($dado->duracao)) {{ $dado->duracao }}@elseif (!empty(old('duracao'))){{ old('duracao') }}@else{{ '' }} @endif"><br>


    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ url('assinatura') }}" class="btn btn-primary">Voltar</a>
</form>

@stop
