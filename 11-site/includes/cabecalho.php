<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
// Função para definir o título da página com base na URL
function obterTituloPagina($caminho) {
    $titulo = 'Página Desconhecida';

    switch ($caminho) {
        case '/index.php':
            $titulo = 'Site com PHP';
            break;
        case '/duvidas.php':
            $titulo = 'Duvidas';
            break;
        case '/contatos.php':
            $titulo = 'Contato';
            break;
        case '/cursos.php':
            $titulo = 'Treinamentos';
            break;
        // Adicione mais casos conforme necessário
        default:
            $titulo = 'Página Desconhecida';
            break;
    }

    return $titulo;
}

// Obter o caminho da URL da página atual
$caminho = $_SERVER['REQUEST_URI'];

// Obter o título da página com base na URL
$tituloPagina = obterTituloPagina($caminho); 
//echo "Titulo da pagina" $tituloPagina;
?>
    <title><?php echo $tituloPagina?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


    <div class="container">
        <header>
            <h1>Site com PHP</h1>
            <nav>
                <a href="index.php">Home</a>
                <a href="cursos.php">Treinamentos</a>
                <a href="duvidas.php">Dúvidas</a>
                <a href="contatos.php">Contatos</a>
            </nav>
        </header>

        <main>
    