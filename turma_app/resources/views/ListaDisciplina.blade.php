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
                <li><a href="{{ url('aluno')}}" class="button">Cadastrar Aluno</a></li>
            </ul>
        </nav>

    </div>
    <div>
        <h1>Lista de Disciplinas</h1>
        <hr>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>PROFESSOR</th>
                    <th>ESCOLA</th>
                    <th>QTD ALUNOS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($disciplinas as $disciplina)
                <tr>
                    <td>{{ $disciplina['id']}}</td>
                    <td>{{ $disciplina['nome']}}</td>
                    <td>{{ $disciplina['professor']}}</td>
                    <td>{{ $disciplina['escola']}}</td>
                    <td>{{ $disciplina['qtd_alunos']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>