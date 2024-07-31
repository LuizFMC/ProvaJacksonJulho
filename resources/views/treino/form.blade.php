@extends('base')
@section('conteudo')
@section('titulo', 'Formulário de treino')
@php
    if (!empty($dado->id)) {
        $route = route('treino.update', $dado->id);
    } else {
        $route = route('treino.store');
    }
@endphp

<h3>Formulário de treino</h3>
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

    <label for="">Tipo</label><br>
    <input type="text" name="tipo" class="form-control"
        value="@if (!empty($dado->tipo)) {{ $dado->tipo }}@elseif (!empty(old('tipo'))){{ old('tipo') }}@else{{ '' }} @endif"><br>

    <label for="">Series</label><br>
    <input type="text" name="series" class="form-control"
        value="@if (!empty($dado->series)) {{ $dado->series }}@elseif (!empty(old('series'))){{ old('series') }}@else{{ '' }} @endif"><br>

        <label for="">Repetições</label><br>
    <input type="text" name="reps" class="form-control"
        value="@if (!empty($dado->reps)) {{ $dado->reps }}@elseif (!empty(old('reps'))){{ old('reps') }}@else{{ '' }} @endif"><br>

    

    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ url('treino') }}" class="btn btn-primary">Voltar</a>
    
</form>

@stop
