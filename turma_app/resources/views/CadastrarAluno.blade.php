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
            <table>
                <tr>
                    <td> <a href=" {{ url('/home') }} "> <button> Home</button></a> </td>
                    <td> <a href=" {{ url('/Aluno') }} "> <button> Cadastrar Aluno</button></a></td>
                    <td> <a href=" {{ url('/Disciplina') }} "> <button> Cadastrar Disciplina</button></a></td>

                </tr>
            </table>
        </nav>
    </div>
    <h1>Página - Cadastrar Aluno</h1>
    <h2>Cadastrar Aluno:</h2>
    <form action=" {{ route('products.store') }} " method="POST" enctype="multipart/form-data">
        @csrf

        <label for="nome_aluno">NOME Aluno:</label>
        <input type="text" name="nome_aluno" id="nome_aluno" required >

        <label for="idade">IDADE:</label>
        <input type="text" name="idade" id="idade" required >

        <label for="sexo">SEXO:</label>
        <input type="text" name="sexo" id="sexo" required >

        <label for="cpf">cpf:</label>
        <input type="text" name="cpf" id="cpf" required >

        <label for="rg">RG:</label>
        <input type="text" name="rg" id="rg" required >

        <label for="email">EMAIL:</label>
        <input type="text" name="email" id="email" required >

        <label for="senha">SENHA:</label>
        <input type="text" name="senha" id="senha" required >
        <br><br>
        <input type="submit" class="">
    </form>
    <hr>


</body>
</html>