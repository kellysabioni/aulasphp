<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Funções</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container">

    <h1>Trabalhando com Funções</h1>
    <hr>
    <h2>Função como procedimento (ou sub-rotina)</h2>
    <p><i>Procedimentos <b>não retornam</b> nada.</i></p>

<?php
function exibirDadosDoAutor(){
    echo "<h4>Fulano de Tal - e tal </h4>";
    echo "<p><time>".date ("d/m/Y")."</time></p>";
}
?>    
    <h3>Chamada do procedimento</h3>
<?php
$valor = 500;
if ($valor >1000 ) {
    exibirDadosDoAutor();
} ?>
    <hr>
    <h3>Outras Chamadas</h3>
    <div> <?=exibirDadosDoAutor()?>
        <ul>
            <li><?=exibirDadosDoAutor()?></li>
            <li><b><?=exibirDadosDoAutor()?></b></li>
        </ul>
    </div>
    <hr>
    <h2>Função com paramêtros (ou argumentos)</h2>
<?php
function somar($valor1, $valor2){
    /* Variável de escopo local: 
    Este tipo de variável existe somente dentro da função em que foi declarada*/ 
    $total = $valor1 + $valor2;

    /* Retornamos o resultado, ou seja, "mandamos para fora" da função o resultado que ela fez*/
    return $total;

    /*opção retornando resultado direto na expressão (sem uso de variável local)*/
    //return $valor1 + $valor2;
};
?>
    <p>Resultado 1: <?=somar(10, 5)?></p>
    <p>Resultado 2: <?=somar(23, 107)?></p>
<?php
//Chamando a função e GUARDANDO o resultado numa variável GLOBAL
$resultado3 = somar(1250, 788.85);
?>
    <p>Resultado 3: <?=$resultado3?></p>
<?php if($resultado3 > 2000){ ?>
    <p class = "alert alert-success"> O resultado 3 é maior que 2000</p>
<?php 
} else {?>
    <p class = "alert alert-danger"> Resultado 3 não é maior que 2000</p>
<?php
} ?>
    <!--  Usando uma função como parte de uma condição:
      PRIMEIRO: a função é chamada (aí ela calcula e retorna)
      DEPOIS: o resultado que retornou é comparado com a condição  -->
<?php if ( somar(10, 500) < 500) { ?>
    <p>João Pedro REPROVADO</p>
<?php    
} else { ?>
    <p>João Pedro APROVADO</p>
<?php    
}?>    
    <hr>
    <h3>Função com parâmetros opcionais</h3>
<?php
/* Parâmetros opcionais possuem algum tipo de atribuição com um valor alternativo, para o caspo de não serem passados na chamada da função. Obs.: sempre devem esta por último na relação de parâmetros da função*/
function exibirSaudacao($mensagem, $pessoa = ""){
    return "Olá! $mensagem $pessoa";
}
?>    
    <p>Mensagem 1: <?=exibirSaudacao("Bom dia", "João Pedro") ?></p>
    <p>Mensagem 2: <?=exibirSaudacao("Boa tarde") ?></p>

    <hr>
    <h2>Indução de tipos de dados</h2>
<?php
/* Indicando que o parâmetro DEVE ser do tipo inteiro e que o retorno da função DEVE ser do tipo string.*/
function verificarNegativo ( int $valor ):string{
    return $valor < 0 ? "é negativo" : "não é negativo" ;
//    if ($valor < 0) {
//        return "é negativo";
//    } else {
//        return "não é negativo";
//    }
}

/* S*/

/* Tipos comuns para uso com indução
string  -> textos/caracteres em geral
int     -> números inteiros
float   -> números com casas decimais 
array   -> vetor/matriz
object  -> obejto */ 
?>    
    <p>Número 10: <?=verificarNegativo(10)?></p>
    <p>Número -10: <span class="badge text-bg-danger"> <?=verificarNegativo(-10)?> </span></p>
    <!-- Código abaixo, gera um erro relacionado a indução de tipos (foi dado uma string e era esperado um número inteiro) -->
    <!-- TIRE O COMENTÁRIO SE QUISER TESTAR -->

    <!-- <p>Teste de valor/parâmetro errado: <?=verificarNegativo("")?></p> -->

    <hr>

</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>