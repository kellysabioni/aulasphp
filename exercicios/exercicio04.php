<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
    <style>
        .cabecalho{
            border: 3px black solid;
            text-align: center;
            padding: 2px;
        }

    </style>
</head>
<body>
    <h1>Exercício 04 (Loop e Estrutura de Dados)</h1>    
    <hr>
    <?php
$i = 0;    
$linguagens = array(
  "Python" => "Análise de dados, automação",
  "JavaScript" => "Interatividade no desenvolvimento web",
  "Java" => "Desenvolvimento corporativo, Android",
  "C" => "Desenvolvimento de sistemas, performance",
  "Ruby" => "Desenvolvimento web rápido",
  "Go" => "Alta performance, concorrência"
);
?>
<table>
    <tr class="cabecalho">
        <td>Indice</td>
        <td>Linguagem</td>
        <td>Descrição</td>
    </tr>
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
</table>


</body>
</html>