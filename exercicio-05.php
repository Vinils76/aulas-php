<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercizando</title>
</head>
<body>
    <h1>Exercicio 5</h1>

    <hr>

<?php
$nota1 = 7;
$nota2 = 0;

$media = ($nota1 + $nota2)/ 2

if ($media >= 7){
    $situacao = "aprovado";
} else { 
    $situacao = "reprovado";
}
?>

<p> <?=$media?></p>
<p> <?=$situacao?></p>









    
</body>
</html>