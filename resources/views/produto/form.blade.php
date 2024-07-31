@extends('base')
@section('conteudo')
@section('titulo', 'Formulário de produto')
@php
    if (!empty($dado->id)) {
        $route = route('produto.update', $dado->id);
    } else {
        $route = route('produto.store');
    }
@endphp

<h3>Formulário de produto</h3>
<form action="{{ $route }}" method="post" enctype="multipart/form-data">

    @csrf

    @if (!empty($dado->id))
        @method('put')
    @endif

    <input type="hidden" name="id"
        value="@if (!empty($dado->id)) {{ $dado->id }}@else{{ '' }} @endif"><br>

    <label for="">Nome</label><br>
    <input type="text" name="nome" class="form-control"
        value="@if (!empty($dado->nome)) {{ $dado->nome }}@elseif (!empty(old('nome'))){{ old('nome') }}@else{{ '' }} @endif"><br>

    <label for="">Valor</label><br>
    <input type="text" name="valor" class="form-control"
        value="@if (!empty($dado->valor)) {{ $dado->valor }}@elseif (!empty(old('valor'))){{ old('valor') }}@else{{ '' }} @endif"><br>

    <label for="">Quantidade</label><br>
    <input type="text" name="qtd" class="form-control"
        value="@if (!empty($dado->qtd)) {{ $dado->qtd }}@elseif (!empty(old('qtd'))){{ old('qtd') }}@else{{ '' }} @endif"><br>

        <label for="">Quantidade estoque </label><br>
    <input type="text" name="qtdestoque" class="form-control"
        value="@if (!empty($dado->qtdestoque)) {{ $dado->qtdestoque }}@elseif (!empty(old('qtdestoque'))){{ old('qtdestoque') }}@else{{ '' }} @endif"><br>
        @php
        $nome_imagem = !empty($dado->imagem) ? $dado->imagem : 'sem_imagem.jpg';
        //dd($nome_imagem);
    @endphp
    <label for="">Imagem</label><br>
    <img src="{{ asset('storage/' . $nome_imagem) }}" width="300px" alt="imagem" />
    <input type="file" name="imagem" class="form-control" value="@if (!empty($dado->imagem)) {{ $dado->imagem }}@elseif (!empty(old('imagem'))){{ old('imagem') }}@else{{ '' }} @endif"><br>

    <label for="empresa_id">Empresa</label><br>
    <select name="empresa_id" class="form-control">
        @foreach ($empresas as $empresa)
            <option value="{{ $empresa->id }}" {{ !empty($dado->empresa_id) && $dado->empresa_id == $empresa->id ? 'selected' : '' }}>
                {{ $empresa->nome }}
            </option>
        @endforeach
    </select><br>
  

    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ url('produto') }}" class="btn btn-primary">Voltar</a>
</form>

@stop
