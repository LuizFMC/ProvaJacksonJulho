@extends('base')
@section('conteudo')
@section('titulo', 'Listagem de treinos')

<h3>Listagem de treinos</h3>

<form action="{{ route('treino.search') }}" method="post">

    <div class="row">
        @csrf
        <div class="col-4">
            <label for="">Nome</label><br>
            <input type="text" name="nome" class="form-control"><br>
        </div>
        <div class="col-4" style="margin-top: 22px;">
            <button type="submit" class="btn btn-primary"> <i class="fa-solid fa-magnifying-glass"></i> Buscar</button>
            <a href="{{ url('treino/create') }}" class="btn btn-success"><i class="fa-solid fa-plus"></i> Novo</a>
            <a href="{{ url('/') }}" class="btn btn-danger"><i class="fa-solid fa-home"></i> Home</a> 
            <a href="{{ url('treino/report') }}" class="btn btn-danger"><i class="fa-solid fa-file-pdf"></i> PDF</a>
            <a href="{{ url('treino/chart') }}" class="btn btn-warning"><i class="fa-solid fa-chart-pie"></i> Gráfico</a>

        </div>
    </div>
</form>

<hr>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Series</th>
            <th>Repetições</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dados as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nome }}</td>
                <td>{{ $item->tipo }}</td>
                <td>{{ $item->series }}</td>
                <td>{{ $item->reps }}</td>
                <td><a href="{{ route('treino.edit', $item->id) }} "class="btn btn-outline-primary" title="Editar"><i
                            class="fa-solid fa-pen-to-square"></i></a></td>
                <td>
                    <form action="{{ route('treino.destroy', $item) }}" method="post">
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
