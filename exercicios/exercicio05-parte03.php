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
    ["nome" => "Ana", "notas" => [8, 7, 9]],
    ["nome" => "Bruno", "notas" => [6, 5, 7]],
    ["nome" => "Carlos", "notas" => [9, 8, 8]],
    ["nome" => "Débora", "notas" => [7, 7, 6]],
    ["nome" => "Eduardo", "notas" => [5, 6, 7]]
];

foreach ($alunos as $aluno) {
    echo $aluno['nome']. "<br>";

    foreach($aluno['notas'] as $nota){
        echo "<b>".$nota."</b><br>";
    }

    
}

?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>