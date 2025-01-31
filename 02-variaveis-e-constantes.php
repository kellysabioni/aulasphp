<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Manipulando dados na memória</title>
</head>
<body>
    <h1>Usando variáveis e constantes</h1>
    <hr>

<?php
/* Variáveis */
$curso = "Téc. em Informática para Internet";   // string
$ano = 2025; // inteiro
$preco = 2500.25; // real (float, decimal)

echo "<h2>Saída de dados usando echo na sintaxe COMPLETA</h2>";

// Usando concatenação
echo "<p>Estamos no curso <b class='cor'>".$curso. "</b> no ano letivo de ".$ano."</p>";
echo '<p>Estamos no curso '.$curso. ' no ano letivo de '.$ano.'</p>';

// Interpolação (OBRIGATÓRIO ASPAS DUPLAS)
echo "<p>Estamos no curso $curso no ano letivo de $ano</p>";

// Com aspas simples, interpolação NÃO FUNCIONA (vira texto)
echo '<p>Estamos no curso $curso no ano letivo de $ano</p>';
?>
    <hr>

    <h2>Saída de dados usando echo na sintaxe ABREVIADA/CURTA</h2>
    <p>Estamos no curso <b class="cor"><?=$curso?></b> no ano letivo de <?=$ano?> </p>

    <hr>

<?php
/* Constantes (recomenda-se nomeá-las usando MAIÚSCULAS) */

// Sintaxe 1 (mais antiga): usando a função define()
define("MEU_NOME", "Tiago B. dos Santos");

// Sintaxe 2 (mais moderna): usando a palavra-chave const
const UNIDADE = "Penha";
?>
    <h2>Saída de dados constantes</h2>
    <p>Me chamo <?=MEU_NOME?> e estou no Senac <?=UNIDADE?> </p>

    <h2>Sintaxe heredoc e nowdoc</h2>
    <p><i>Úteis para strings de múltiplas linhas</i></p>

<?php
// Exemplo usando heredoc
$nome = "Fulano da Silva";

$textoHeredoc = <<<TEXTO
<ul>
    <li>Nome: $nome</li>
    <li style="color:red">Texto com CSS</li>
</ul>
TEXTO;

// Exemplo Nowdoc 
// (somente para string/texto... não interpreta variáveis)
$comida = "Lasanha";

$textoNowdoc = <<<'TEXTO'
    Olá! Bem-vindo(a) ao PHP.
    Estamos testando a sintaxe <b>nowdoc</b>.
    Eu adoro $comida.
TEXTO;
?>
    <div>
        <h3>Saída com heredoc</h3>
        <?=$textoHeredoc?>
    </div>

    <div> 
        <h3>Saída com nowdoc</h3>
        <?=$textoNowdoc?> 
    </div>
        
</body>
</html>