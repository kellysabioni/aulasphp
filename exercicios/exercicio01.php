<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 (ok)</title>
    <style>
        .texto {
            font-style: italic;
            border-top: solid 1px;
            border-bottom: solid 1px;
        }
    </style>
</head>
<body>
    <h1>Exercício 01 (ok)</h1>
    <hr>
<?php
// Definindo o timezone (fuso horário)
date_default_timezone_set("America/Sao_Paulo");

// $data = "30/01/2025";
$data = date("d/m/Y");
$hora = date("H:i");
echo $data. " - ". $hora;

const NOME = "Tiago";
$curso = "Modelagem de Dados";
$cargaHoraria = 100;
$limiteDeFaltas = $cargaHoraria * 0.25; // ou $cargaHoraria / 4

/* mostre no HTML uma mensagem apresentando o nome da pessoa, o nome do curso, a carga horária do curso e o limite de faltas. */
?>
<p class="texto">O aluno <span style="color: red;"><?=NOME?></span> está matriculado no curso <?=$curso?>, cuja carga horária é de <?=$cargaHoraria?>h tendo limite de faltas de <?=$limiteDeFaltas?>h.</p>

<hr>

<?php
/* Diferenças entre const/define e variável */
// VARIÁVEL
$exemplo = 10;
echo $exemplo;

echo "<br><br>";

$exemplo = 150;
echo $exemplo;

echo "<br><br>";

// CONSTANTE
const EXEMPLO = 10;
echo EXEMPLO;

//EXEMPLO = 200; // dá erro pois constantes NÃO PODEM SER MODIFICADAS
//echo EXEMPLO;
?>


</body>
</html>