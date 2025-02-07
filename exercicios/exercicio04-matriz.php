<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
    <style>
        body {font-family: Arial, sans-serif;}
        table{
            max-width: 70%;
            width: 100%;
            padding: 20px 0 40px;
            border-collapse: collapse;
            margin: 20px 0;
            border-radius: 8px;
            border: 2px solid darkblue;
            box-sizing: border-box;
        }
        th{
            font-size: 1.3rem;
            font-weight: 700;
            color: whitesmoke;
            margin: auto;
            padding: 10px 15px;
            background-color: #012a4a;
        }
        td {
            border-top: 1px  solid darkblue;
            padding: 10px 15px;
        }

        tr:nth-child(even){background-color:rgba(11, 171, 245, 0.51);}
        .indice{text-align: center;}

    </style>
</head>
<body>
    <h1>Exercício 04 (Loop e Estrutura de Dados)</h1>    
    <hr>
    <?php
$linguagens = [
    [
        "id"=> 1,
        "nome"=>"Python",
        "descricao" => "Análise de dados, automação",
    ],
    [
        "id"=> 2,
        "nome"=>"JavaScript",
        "descricao" => "Interatividade no desenvolvimento web",
    ],
    [
        "id"=> 3,
        "nome"=>"Java",
        "descricao" => "Desenvolvimento corporativo, Android",
    ],
    [
        "id"=> 4,
        "nome"=>"C",
        "descricao" => "Desenvolvimento de sistemas, performance",
    ],
    [
        "id"=> 5,
        "nome"=>"Ruby",
        "descricao" => "Desenvolvimento web rápido",
    ],
    [
        "id"=> 6,
        "nome"=>"Go",
        "descricao" => "Alta performance, concorrência",
    ],
];?>
<table class="geral">
    <thead>
        <tr>
            <th class="indice">Indice</th>
            <th>Linguagem</th>
            <th>Descrição</th>
        </tr>
    </thead>

    <tbody>
<?php
foreach ($linguagens as $linguagem) {?>
        <tr>
            <td class="indice"><?=$linguagem["id"]?></td>
            <td><?=$linguagem["nome"]?></td>
            <td><?=$linguagem["descricao"]?></td>
        </tr>
<?php }?>
    </tbody>
</table>


</body>
</html>