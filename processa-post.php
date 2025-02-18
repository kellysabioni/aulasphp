<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Método Post </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1 class="text-center">Trabalhando com o POST</h1>
    <hr>
    <?php
    //capturando dados
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    
    //Capturando os options 
    //Solução 1: aplicar um if/else ternário checando se existe algum interesse
    /* $interesses = isset($_POST["interesses"] ) ? $_POST["interesses"]:[]; */
    
    //Solução 2: usar o operador de coalescência nula ??
    $interesses = $_POST["interesses"] ?? [];
    $informativos = $_POST["informativos"];
    
    $mensagem = $_POST["mensagem"];
    ?>
 
    <!-- Exibindo dados -->
    <h2 class="text-center">Informações do usuário: </h2>
    <ul class="list-group w-50">
        <li class="list-group-item list-group-item-action">Nome: <?= $nome ?></li>
        <li class="list-group-item list-group-item-action">Email: <?= $email ?></li>
        <li class="list-group-item list-group-item-action">Idade: <?= $idade ?></li>

    <?php
    if ( !empty($interesses)) { ?>
        <li class="list-group-item list-group-item-action">Interesses usando <code>implode() </code> : <?= implode(", " , $interesses) ?></li>

        <li class="list-group-item list-group-item-action">Interesses usando <code>foreach() </code> :
            <ul>
                <?php foreach ($interesses as $interesse ) {?><li><?=$interesse?></li><?php } ?>
            </ul>
        </li>
    <?php } ?>  
        
    <li class="list-group-item list-group-item-action">Deseja receber informativos? <?= $informativos ?></li>
        <li class="list-group-item list-group-item-action">Mensagem: <?= $mensagem ?></li>
    </ul>
  </div>
 
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>