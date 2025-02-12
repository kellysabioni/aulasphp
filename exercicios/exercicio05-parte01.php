<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - FUNÇÕES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container">

        <h1>EXERCICIO 05 - FUNÇÕES (parte 01)</h1>
        <hr>
        <p>Criar três variáveis para representar as notas de um aluno </p>
        <p>Calcule a média destas notas e verifique a situação do aluno (aprovado ou reprovado) - o critério é ter média a partir de 7</p>
        <hr>
    <?php
    $aluno = "Kelly";
    
    $nota1 = 2;
    $nota2 = 10;
    $nota3 = 10;

    $notaDeCorte = 7;
    
    $mediaDasNotas = ($nota1 + $nota2 + $nota3) / 3;

    if ($mediaDasNotas < $notaDeCorte) {
        $situacao = "Reprovado(a)";
    } else {
        $situacao = "Aprovado(a)";
    }
?>  
    <h2>Resultado do Exercício</h2>
    <p>A média das notas de <strong> <?=$aluno?> </strong> foi <b><i><?=$mediaDasNotas?></i></b>. E está <?=$situacao?>!</p>
    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>