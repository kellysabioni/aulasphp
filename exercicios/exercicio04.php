<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
</head>
<body>
    <div class="container">
        <h1>Exercício 04 (Loop e Estrutura de Dados)</h1>    
    <hr>
    <?php
$i = 1000;    
$linguagens = array(
  "Python" => "Análise de dados, automação",
  "JavaScript" => "Interatividade no desenvolvimento web",
  "Java" => "Desenvolvimento corporativo, Android",
  "C" => "Desenvolvimento de sistemas, performance",
  "Ruby" => "Desenvolvimento web rápido",
  "Go" => "Alta performance, concorrência"
);
?>

<table class="table table-striped table-hover w-75 text-center">
    <thead>
        <tr>
            <th>Indice</th>
            <th>Linguagem</th>
            <th>Descrição</th>
        </tr>
    </thead>

    <tbody>
<?php
foreach ($linguagens as $linguagem => $descricao) {
    $i++;
?>
        <tr>
            <td><?=$i?></td>
            <td><?=$linguagem?></td>
            <td><?=$descricao?></td>
        </tr>
        <!-- <p> Linguagem <?=$linguagem?> : <?=$descricao?>  </p> -->
        <?php
}
?>
    </tbody>

</table>
</div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</body>
</html>