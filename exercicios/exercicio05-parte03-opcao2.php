<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - FUNÇÕES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container text-center ">

        <h1 class="mb-4">EXERCICIO 05 - FUNÇÕES (parte 03)</h1>
        <hr>
        <p>Adapte o exercício para que funcione com uma lista (array associativo) de 5 alunos.</p>
        <hr>

<?php
$alunos = [
    [ "nome" => "Ana",
      "nota1" => 10,
      "nota2" => 8,
      "nota3" => 7,    ],
    [ "nome" => "Bruno",
      "nota1" => 10,
      "nota2" => 8,
      "nota3" => 7,    ],
    [ "nome" => "Denis",
      "nota1" => 10,
      "nota2" => 8,
      "nota3" => 7,    ],
    [ "nome" => "Kelly",
      "nota1" => 10,
      "nota2" => 8,
      "nota3" => 7,    ],
    [ "nome" => "Paulo",
      "nota1" => 10,
      "nota2" => 8,
      "nota3" => 7,    ]
  ];

foreach ($alunos as $aluno => $nome) {
  echo $nome;
}

?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>