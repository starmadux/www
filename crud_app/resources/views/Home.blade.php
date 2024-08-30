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
            <!-- <a href="{{ url ('paginainicial') }}"><li> paginainicial<li></a> -->
            <a href="{{ url ('/cadastrar') }}" ><li> Cadastrar<li></a>
            <a href="{{ url ('/meu-perfil') }}" ><li> Meu perfil<li></a>
            <a href="{{ url ('/ ') }}"><li> pagina inicial <li></a>
        </div>
    </nav>
    <h1>{{pagina inicial}}</h1>

</body>
</html>