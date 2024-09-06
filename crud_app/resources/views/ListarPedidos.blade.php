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
                <li><a href="{{ url('clientes')}}" class="button">Lista de Clientes</a></li>
            </ul>
        </nav>

    </div>
    <h1>Lista de Pedidos</h1>
    <hr>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Código do Pedido</th>
                <th>Cliente</th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Valor do Pedido</th>
                <th>Valor do Desconto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pedidos as $pedido)
            <tr>
                <td>{{ $pedido['id']}}</td>
                <td>{{ $pedido['cod_ped']}}</td>
                <td>{{ $pedido['cliente']}}</td>
                <td>{{ $pedido['produto']}}</td>
                <td>{{ $pedido['quant']}}</td>
                <td>{{ number_format($pedido['valor_ped'], 2, ',', '.')}}</td>
                <td>{{ number_format($pedido['valor_desc'], 2, ',', '.')}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
    </div>
</body>
</html>