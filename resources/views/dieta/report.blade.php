<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <h3>{{ $titulo }}</h3>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Cafe</th>
                <th scope="col">Lanche</th>
                <th scope="col">Almoço</th>
                <th scope="col">Lanche da tarde</th>
                <th scope="col">Janta</th>
                <th scope="col">Ceia</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($dietas as $dieta)
                <tr>
                    <th scope="row">{{ $dieta->id }}</th>
                    <td>{{ $dieta->nome }}</td>
                    <td>{{ $dieta->cafe }}</td>
                    <td>{{ $dieta->lanche1 }}</td>
                    <td>{{ $dieta->almoco}}</td>
                    <td>{{ $dieta->lanche2}}</td>
                    <td>{{ $dieta->janta}}</td>
                    <td>{{ $dieta->ceia}}</td>

                </tr>
            @empty
                <tr>
                    <td colspan="6">Sem registro</td>
                </tr>
            @endforelse
        </tbody>
    </table>


</body>

</html>
