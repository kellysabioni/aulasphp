<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Condicionais "REFATORADA"</title>
    <style>
        .alerta-compra{color: red;}
        .normal{color: darkgreen;}
    </style>
</head>
<body>
    <h1>(VERSÃO 2) - Estruturas condicionais</h1>
    <hr>

    <h2>Simples usando <code>if</code></h2>    
<?php
$numero = 5;
if($numero > 1){
?>  
    <p><?=$numero?> é maior que 1</p>
<?php
};
?>
    <hr>
    <h2>Composta</h2>
<?php
$produto = "Ultrabook Asus";
$qtdEmEstoque = 5; // o que temos
$qtdCritica = 5; // mínimo necessário
?>

<h3><?=$produto?></h3>
<h4>Quantidade em estoque: <?=$qtdEmEstoque?></h4>

<?php
if ($qtdEmEstoque < $qtdCritica) {?>
    <p class = "alerta-compra">É necessário comprar!</p>
<?php
    // Condicional ANINHADA
    if($qtdEmEstoque === 0):?>
        <p class = "alerta-compra"><strong> <mark>🚨URGENTE🚨</mark></strong></p>
<?php    
 endif;
} else {?>
    <p class = "normal" >Estoque normal</p>
<?php
}?>
    <hr>
    <h2>Encadeada usando <code>if/elseif/else</code></h2>
    <!-- Verificar a idade de uma pessoa e determinar se é criança, adolescente, adulta ou idosa -->
<?php
$idade = 66;
if ($idade<= 12) {
    $texto = "Criança 👼";
} elseif ($idade <= 17) {
    $texto = "Adolescente 😒";
} elseif ($idade <= 59) {
    $texto = "Adulto 🤯";
} else  {
    $texto = "Idoso 🧓";
}?>

    <p><?=$texto?></p>

</body>
</html>