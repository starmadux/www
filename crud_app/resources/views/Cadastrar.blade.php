<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <nav>
        <div>
            <a href="{{ url ('/cadastrar') }}" ><li> Cadastrar<li></a>
            <a href="{{ url ('/meu-perfil') }}" ><li> Meu perfil<li></a>
            <a href="{{ url ('/ ') }}"><li> Sair<li></a>
        </div>
    </nav>
    <h1>{{$aluno1}}</h1>
    <h1>{{$aluno2}}</h1>
    <h1>{{$aluno3}}</h1>
    <h1>{{$aluno4}}</h1>

</body>
</html>