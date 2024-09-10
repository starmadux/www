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
                <li><a href="{{ url('disciplina')}}" class="button">Cadastrar Disciplina</a></li>
            </ul>
        </nav>

    </div>
    <div>
        <h1>Lista de Aluno</h1>
        <hr>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>IDADE</th>
                    <th>SEXO</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>EMAIL</th>
                    <th>SENHA</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alunos as $aluno)
                <tr>
                    <td>{{ $aluno['id']}}</td>
                    <td>{{ $aluno['nome']}}</td>
                    <td>{{ $aluno['idade']}}</td>
                    <td>{{ $aluno['sexo']}}</td>
                    <td>{{ $aluno['cpf']}}</td>
                    <td>{{ $aluno['rg']}}</td>
                    <td>{{ $aluno['email']}}</td>
                    <td>{{ $aluno['senha']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>