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
    //sintaxe alternativa permitindo chaves
    $numero = 5;
    if($numero > 1){
        echo "<p>A váriavel é maior que 1</p>";
    }

    if($numero > 1) echo "<p>A váriavel é maior que 1</p>"; //sintaxe mais simplificada tirando as chaves
?>

<h2>Composta</h2>
<?php
    $produto = "Notebook NIMBUS 3000";
    $qtdEmEstoque = 0; //O que temos
    $qtdCritica = 14; // mínimonecessário
    echo "<h3>$produto</h3>";
    if($qtdEmEstoque < $qtdCritica){
        echo "<p class=\"not\">É necessário repor estoque!</p>";

        if($qtdEmEstoque === 0){ //duplo sinal de igual (recebe só o valor)
                                // triplo sinal de igual (recebe só o valor identico)
            echo "<p><mark><b>URGENTE!</b></mark></p>";
        }

    } else {
            echo "<p class=\"ok\">Estoque Ok.</p>";
        }
    
?>

<h2>Encadeada</h2>
<?php
/*Cárdapio 
1 -> Pastel
2 -> Pizza
3 -> Hamburguer
x -> opção fora do cárdapio */

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

echo "<p>$pedido</p>"

?>

<h2>Switch/Case</h2>
<?php

switch($opcao){
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
</body>
</html>