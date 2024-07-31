@extends('base')
@section('conteudo')
@section('titulo', 'Listagem de produtos')

<h3>Listagem de produtos</h3>

<form action="{{ route('produto.search') }}" method="post">

    <div class="row">
        @csrf
        <div class="col-4">
            <label for="">Nome</label><br>
            <input type="text" name="nome" class="form-control"><br>
        </div>
        <div class="col-4" style="margin-top: 22px;">
            <button type="submit" class="btn btn-primary"> <i class="fa-solid fa-magnifying-glass"></i> Buscar</button>
            <a href="{{ url('produto/create') }}" class="btn btn-success"><i class="fa-solid fa-plus"></i> Novo</a>
            <a href="{{ url('produto/chart') }}" class="btn btn-warning"><i class="fa-solid fa-chart-pie"></i> Gráfico</a>
            <a href="{{ url('/') }}" class="btn btn-danger"><i class="fa-solid fa-home"></i> Home</a> 
        </div>
    </div>
</form>

<hr>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Imagem</th>
            <th>Nome</th>
            <th>Valor</th>
            <th>Quantidade</th>
            <th>Quantidade em estoque</th>
            <th>Empresa</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dados as $item)
            <tr>
                @php
                    $nome_imagem = !empty($item->imagem) ? $item->imagem : 'sem_imagem.jpg';
                @endphp
                <td>{{ $item->id }}</td>
                <td><img src="/storage/{{ $nome_imagem }}" width="150px" alt="imagem" /></td>
                <td>{{ $item->nome }}</td>
                <td>{{ $item->valor }}</td>
                <td>{{ $item->qtd }}</td>
                <td>{{ $item->qtdestoque }}</td>
                <td>{{ $item->empresa->nome ?? 'Sem Empresa' }}</td>
                <td><a href="{{ route('produto.edit', $item->id) }} "class="btn btn-outline-primary" title="Editar"><i
                            class="fa-solid fa-pen-to-square"></i></a></td>
                <td>
                    <form action="{{ route('produto.destroy', $item) }}" method="post">
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
