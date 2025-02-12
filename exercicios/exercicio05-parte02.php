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

        <h1 class="mb-4">EXERCICIO 05 - FUNÇÕES (parte 02)</h1>
        <hr>
        <p>Use duas funções: uma para isolar a lógica de cálculo da média, e outra para isolar a lógica de verificação da situação do aluno.</p>
        <p>Use recursos do CSS (ou Bootstrap) para formatar em vermelho caso reprovado, e azul caso aprovado.</p>
        <hr>
    <?php
    $aluno = "Kelly";
  
    $calcucularMediaDasNotas = function(float $nota1, float $nota2, float $nota3):float {
        return $mediaDasNotas = ($nota1 + $nota2 + $nota3) / 3;
    };

    /* Chamamos a função e PASSAMOS OS VALORES das variáveis para ela   */
    $mediaFinal = number_format($calcucularMediaDasNotas(5,5,5), 1,",","." );

    function verificarSituacao ($mediaFinal):string {
        return $mediaFinal < 7 ? 
        '<span class="alert alert-danger">Reprovado</s>' : 
        '<span class="alert alert-info">Aprovado</span>'; 
    };

    $situacao = verificarSituacao($mediaFinal);
?>  
    <h2 class="mb-5">Resultado do Exercício</h2>
    <p>A média das notas de <b><?=$aluno?></b> foi <?=$mediaFinal?>. E está <?=$situacao?>!!! </p>
    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>