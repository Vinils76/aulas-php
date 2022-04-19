<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais Condicionando</title>
    <style>
        .ok {color: green;}
        .not {color: red;}
    </style>
</head>
<body>

<h1>Estruturas de Controle Condicional</h1>
<hr>

<h2>Simples</h2>
<?php
   
    $numero = 5;
    if($numero > 1){
?>
    <p><?=$numero?> é maior que 1</p>
<?php    
    }
?>

<h2>Composta</h2>

<?php
    $produto = "Notebook NIMBUS 3000";
    $qtdEmEstoque = 0; 
    $qtdCritica = 14; 
?>

<h3><?=$produto?></h3>

<?php
    if($qtdEmEstoque < $qtdCritica){
?>
    <p class="not">É necessário repor estoque!</p>

<?php
    if($qtdEmEstoque === 0){
?> 
                              
    <p><mark><b>URGENTE!</b></mark></p>

<?php
    }    
} else {
?>
    <p class="ok">Estoque Ok.</p>
<?php
}
?>

<h2>Encadeada</h2>

<?php
$opcao = 1;

if($opcao === 1){
    $pedido = "Quarteirão com queijo x1";

} elseif($opcao === 2) {
    $pedido = "Big tasty x3";
} elseif ($opcao === 3) {
    $pedido = "Cheddar duplo McMelt x2";
} else {
    $pedido = "Esgotado";
}
?>

<p><?=$pedido?></p>

<h2>Switch/Case</h2>

<?php
switch($opcao === 1){
    case 1: $pedido = "Quarteirão com queijo";
    break;

    case 2: $pedido = "Cheddar dulplo";
    break;

    case 3: $pedido = "Big mac";
    break;

    default: $pedido = "Opção esgostada"; 
    break;
}
?>

<p><?=$pedido?></p>
</body>
</html>