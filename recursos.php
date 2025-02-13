<?php
define("ESCOLA", "Senac");
$curso = "Tec. Informática para Internet";
$tecnologias = ["HTML", "CSS", "JS"];

function verificarIdade(int $valorDaIdade): string {
return$valorDaIdade>18 ? "maior" : "menor" ;
}