@extends('base')
@section('conteudo')
@section('titulo', 'Listagem de dietas')

<h3>Listagem de dietas</h3>

<form action="{{ route('dieta.search') }}" method="post">

    <div class="row">
        @csrf
        <div class="col-4">
            <label for="">Nome</label><br>
            <input type="text" name="nome" class="form-control"><br>
        </div>
        <div class="col-4" style="margin-top: 22px;">
            <button type="submit" class="btn btn-primary"> <i class="fa-solid fa-magnifying-glass"></i> Buscar</button>
            <a href="{{ url('dieta/create') }}" class="btn btn-success"><i class="fa-solid fa-plus"></i> Novo</a>
            <a href="{{ url('/') }}" class="btn btn-danger"><i class="fa-solid fa-home"></i> Home</a> 
            <a href="{{ url('dieta/report') }}" class="btn btn-danger"><i class="fa-solid fa-file-pdf"></i> PDF</a>
        </div>
    </div>
</form>

<hr>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Café da manhã</th>
            <th>Lanche</th>
            <th>Almoço</th>
            <th>Lanche da tarde</th>
            <th>Janta</th>
            <th>Ceia</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dados as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nome}}</td>
                <td>{{ $item->cafe}}</td>
                <td>{{ $item->lanche1}}</td>
                <td>{{ $item->almoco}}</td>
                <td>{{ $item->lanche2}}</td>
                <td>{{ $item->janta}}</td>
                <td>{{ $item->ceia}}</td>
                <td><a href="{{ route('dieta.edit', $item->id) }} "class="btn btn-outline-primary" title="Editar"><i
                            class="fa-solid fa-pen-to-square"></i></a></td>
                <td>
                    <form action="{{ route('dieta.destroy', $item) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-outline-danger" title="Deletar"
                            onclick="return confirm('Deseja realmente deletar esse registro?')">
                            <i class="fa-solid fa-trash-can"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@stop
