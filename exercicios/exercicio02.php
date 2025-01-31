<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
    <style>
        .container{
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <h1>Exercício 02</h1>
    <hr>

    <?php
    $pessoa1 =[
        "usuario" => "kelly.sabioni",
        "email" => "kelly.sabioni@yahoo.com.br",
        "senha" => "123",
        "idade" => 30,
        "sexo" => "feminino",
        "cidade" => "São Paulo",
    ];
    $pessoa2 =[
        "usuario" => "sabioni",
        "email" => "sabioni@yahoo.com.br",
        "senha" => "123",
        "idade" => 40,
        "sexo" => "masculino",
        "cidade" => "Rio de Janeiro",
    ];          
    ?>
    <div class="container">
        <section>
            <h2>Dados da Pessoa 1</h2>
            <!-- nome de usuario, email, idade e sexo -->
            <p>Usuario: <?=$pessoa1["usuario"]?></p>
            <p>E-mail: <?=$pessoa1["email"]?></p>
            <p>Idade: <?=$pessoa1["idade"]?></p>
            <p>Sexo: <?=$pessoa1["sexo"]?></p>
        </section>
        <section>
            <h2>Dados da Pessoa 2</h2>
            <!-- nome de usuario, email, idade e sexo -->
            <p>Usuario: <?=$pessoa2["usuario"]?></p>
            <p>E-mail: <?=$pessoa2["email"]?></p>
            <p>Idade: <?=$pessoa2["idade"]?></p>
            <p>Sexo: <?=$pessoa2["sexo"]?></p>
        </section>
    </div>

</body>
</html>