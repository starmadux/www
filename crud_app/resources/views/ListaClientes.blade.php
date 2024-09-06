<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <nav>
            <ul>
                <li><a href="{{ url('home')}}" class="button">Home</a></li>
                <li><a href="{{ url('pedidos')}}" class="button">Lista de Pedidos</a></li>
            </ul>
        </nav>

    </div>
    <div>
        <h1>Lista de Clientes</h1>
        <hr>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>Sexo</th>
                    <th>Data de Nascimento</th>
                    <th>Celular</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente['id']}}</td>
                    <td>{{ $cliente['nome']}}</td>
                    <td>{{ $cliente['cpf']}}</td>
                    <td>{{ $cliente['rg']}}</td>
                    <td>{{ $cliente['sexo']}}</td>
                    <td>{{ $cliente['data_nascimento']}}</td>
                    <td>{{ $cliente['celular']}}</td>
                    <td>{{ $cliente['email']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>