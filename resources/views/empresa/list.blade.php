@extends('base')
@section('conteudo')
@section('titulo', 'Listagem de empresas')

<h3>Listagem de empresas</h3>

<form action="{{ route('empresa.search') }}" method="post">
    <div class="row">
        @csrf
        <div class="col-4">
            <label for="">Nome</label><br>
            <input type="text" name="nome" class="form-control"><br>
        </div>
        <div class="col-4" style="margin-top: 22px;">
            <button type="submit" class="btn btn-primary"> <i class="fa-solid fa-magnifying-glass"></i> Buscar</button>
            <a href="{{ url('empresa/create') }}" class="btn btn-success"><i class="fa-solid fa-plus"></i> Novo</a>
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
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dados as $item)
            <tr>
                @php
                    $nome_imagem = !empty($item->imagem) ? $item->imagem : 'imagens/sem_imagem.jpg';
                @endphp
                <td>{{ $item->id }}</td>
                <td><img src="{{ asset('storage/' . $nome_imagem) }}" width="150px" alt="imagem" /></td>
                <td>{{ $item->nome }}</td>
                <td>{{ $item->telefone }}</td>
                <td>{{ $item->endereco }}</td>
                <td><a href="{{ route('empresa.edit', $item->id) }}" class="btn btn-outline-primary" title="Editar"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <td>
                    <form action="{{ route('empresa.destroy', $item->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-outline-danger" title="Deletar" onclick="return confirm('Deseja realmente deletar esse registro?')">
                            <i class="fa-solid fa-trash-can"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@stop