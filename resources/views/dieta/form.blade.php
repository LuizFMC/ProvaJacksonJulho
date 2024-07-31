@extends('base')
@section('conteudo')
@section('titulo', 'Formulário de dieta')
@php
    if (!empty($dado->id)) {
        $route = route('dieta.update', $dado->id);
    } else {
        $route = route('dieta.store');
    }
@endphp

<h3>Formulário de dieta</h3>
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

    <label for="">Café</label><br>
    <input type="text" name="cafe" class="form-control"
        value="@if (!empty($dado->cafe)) {{ $dado->cafe }}@elseif (!empty(old('cafe'))){{ old('cafe') }}@else{{ '' }} @endif"><br>

    <label for="">Lanche</label><br>
    <input type="text" name="lanche1" class="form-control"
        value="@if (!empty($dado->lanche1)) {{ $dado->lanche1 }}@elseif (!empty(old('lanche1'))){{ old('lanche1') }}@else{{ '' }} @endif"><br>

    <label for="">Almoço</label><br>
    <input type="text" name="almoco" class="form-control"
        value="@if (!empty($dado->almoco)) {{ $dado->almoco }}@elseif (!empty(old('almoco'))){{ old('almoco') }}@else{{ '' }} @endif"><br>
        
    <label for="">Lanche 2</label><br>
    <input type="text" name="lanche2" class="form-control"
        value="@if (!empty($dado->lanche2)) {{ $dado->lanche2 }}@elseif (!empty(old('lanche2'))){{ old('lanche2') }}@else{{ '' }} @endif"><br>

        <label for="">Jantar</label><br>
    <input type="text" name="janta" class="form-control"
        value="@if (!empty($dado->janta)) {{ $dado->janta }}@elseif (!empty(old('janta'))){{ old('janta') }}@else{{ '' }} @endif"><br>

        <label for="">Ceia</label><br>
    <input type="text" name="ceia" class="form-control"
        value="@if (!empty($dado->ceia)) {{ $dado->ceia }}@elseif (!empty(old('ceia'))){{ old('ceia') }}@else{{ '' }} @endif"><br>

    

    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ url('dieta') }}" class="btn btn-primary">Voltar</a>
</form>

@stop
