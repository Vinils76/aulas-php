<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio quebra cabeça</title>
</head>
<body>

<h1>Exercicio 3 - resolvido</h1>
<hr>



<?php
    
     $salario= 1000;
?>

<?php
if ($salario < 500){
    $aumento = $salario * 1.15;

} elseif ($salario <= 1000){
    $aumento = $salario * 1.10;

}else
    $aumento = $salario * 1.05


?>

<p>Sálario Antigo: <?=number_format($salario, 2, ",", ".")?></p>
<p>Novo Salário: <?=number_format($aumento, 2, ",", ".")?></p>
    
</body>
</html>