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
    <h1>Página - Cadastrar Disciplina</h1>
    <h2>Cadastrar Disciplina:</h2>
    <form action=" {{ route('products.store') }} " method="POST" enctype="multipart/form-data">
        @csrf

        <label for="nome_professor">NOME PROFESSOR:</label>
        <input type="text" name="nome_professor" id="nome_professor" required >

        <label for="professor">PROFESSOR:</label>
        <input type="text" name="professor" id="professor" required >

        <label for="escola">ESCOLA:</label>
        <input type="text" name="escola" id="escola" required >

        <label for="qtd_alunos">QTD ALUNOS:</label>
        <input type="text" name="qtd_alunos" id="qtd_alunos" required >
        <br><br>
        <input type="submit" class="">
    </form>
    <hr>


</body>
</html>