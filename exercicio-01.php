<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios de PHP</title>
</head>
<body>

    <h1>Exerício 1</h1>
    <hr>

<?php
date_default_timezone_set("America/Sao_Paulo");
$data = date ("d/m/y H:i"); //função date
define("MEU_NOME" , "Antonio Vinicius");
$curso = "gastronomia";
$carga_horaria = 1000;
$limite_faltas = $carga_horaria * 0.25;
?>

<h2>Dados</h2>
<p>Data:<?=$data?></p>
<p>Nome: <?=MEU_NOME?></p>
<p>Curso: <?=$curso?></p>
<p>Carga Horária <?=$carga_horaria?> horas</p>
<p>O limites de falta é de <?=$limite_faltas?> horas</p>

</body>
</html>