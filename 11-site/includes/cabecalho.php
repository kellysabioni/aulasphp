<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
// Função para definir o título da página com base na URL
function obterTituloPagina($caminho) {
    $titulo = "Página Inicial";

    switch ($caminho) {
        case "index.php":
            $titulo = "Site com PHP"; break;
        case "duvidas.php":
            $titulo = "Duvidas";      break;
        case "contatos.php":
            $titulo = "Contato";      break;
        case "cursos.php":
            $titulo = "Treinamentos"; break;
        }

    return $titulo;
}
// Obter o caminho da URL da página atual
$caminho = basename($_SERVER["SCRIPT_NAME"]);

// Obter o título da página com base na URL
$tituloPagina = obterTituloPagina($caminho); 
//echo "Titulo da pagina" $tituloPagina;
?>
    <title><?=$tituloPagina?> - Site PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


    <div class="container">
        <header>
            <h1> Site PHP </h1>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link " href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cursos.php">Treinamentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="duvidas.php">Dúvidas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="contatos.php">Contatos</a>
                </li>
            </ul>
        </header>

        <main>
    