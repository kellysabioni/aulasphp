<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Funções nativas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Usando funções nativas</h1>
        <hr>

        <h2>Strings</h2>
        <h3><code>trim()</code></h3>
<?php
$texto = "  Paulo Henrique está me devendo paçocas     ";
$textoSemEspaco = trim($texto);
?>
<pre><?=var_dump($texto)?></pre>
<pre><?=var_dump($textoSemEspaco)?></pre>
        <hr>

        <h3><code>str_replace()</code></h3>
        <p>Permite substituir partes de uma string</p>
<?php
$fraseFeia = "Esse Paulo é um bobão e xarope";
$fraseBunitinha = str_replace(
    ["bobão", "xarope"],
    ["🚫", "🔞"],
    $fraseFeia
);
?>
        <p><?=$fraseFeia?></p>
        <p><?=$fraseBunitinha?></p>

        <hr>

        <h3><code>explode()</code></h3>
        <p>Transformar uma string em um array</p>
<?php
$textosLinguagens = "HTML,CSS,JS,PHP,SQL";
$arrayLingugens = explode(",", $textosLinguagens);

?>
    <pre><?=var_dump($textosLinguagens)?></pre>
    <pre><?=var_dump($arrayLingugens)?></pre>
    
    <hr>

    <h2>Arrays</h2>
    <h3><code>implode()</code></h3>

<?php
$arrayBandas = ["Rush", "Slayer","Dio"];
$textoBandas = implode(" - ", $arrayBandas);

?>
    <pre><?=var_dump($arrayBandas)?></pre>
    <pre><?=var_dump($textoBandas)?></pre>
    
    <hr>

    <h3><code>extract()</code></h3>
    <p>Extrai chaves associativas para variáveis</p>

<?php
$aluno = [
    "id" => 1,
    "nome" => "Kelly",
    "idade" => 43 ,
];

extract($aluno, EXTR_PREFIX_ALL, "chave"); 

?>

    <ul>
        <li>ID: <?=$chave_id?></li>
        <li>Nome: <?=$chave_nome?></li>
        <li>Idade: <?=$chave_idade?> anos</li>
    </ul>

    </div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>