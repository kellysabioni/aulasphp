<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 (Condicionais)</title>
</head>
<body>
    <h1>Exercício 03 (Condicionais) - 05/02/2025</h1>
    <hr>
<?php
$valorProduto = 5000;

if ($valorProduto>=5000) {
    $valorFinal = $valorProduto - ($valorProduto * 0.15);
} elseif ($valorProduto>=3000) {
    $valorFinal = $valorProduto - ($valorProduto * 0.10);
} elseif ($valorProduto>=1000) {
    $valorFinal = $valorProduto - ($valorProduto * 0.05);
} else {
    $valorFinal = $valorProduto;
}
// Formata o valor final com duas casas decimais e vírgula para separar os milhar
$valorFinalFormatado = number_format($valorFinal, 2, ',', '.');
?>  
    <p>O produto custa <strong><?=$valorFinalFormatado?></strong></p>
    <hr>
</body>
</html>