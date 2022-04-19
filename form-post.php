<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processando o formulário</title>
    <style>
        .aviso{
            color:red;
        }
        .borda{
            border: 2px solid black;
            width: 300px;
            
        }
    </style>
</head>
<body>

<h1>Processamento</h1>
<hr>

<?php
if( empty($_POST['produto']) || empty($_POST["fabricante"])) {
?>

<p class="aviso">Você deve informar o Produto e Fabricante!</p>

<?php
} else {
?>

<?php
$produto = filter_input(INPUT_POST, "produto", FILTER_SANITIZE_SPECIAL_CHARS);
$fabricante = filter_input(INPUT_POST, "fabricante", FILTER_SANITIZE_SPECIAL_CHARS);
$preco = filter_input(INPUT_POST, "preco", FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
//$descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_SPECIAL_CHARS);
$descricao = $_POST["descricao"]
?>

<h2>Dados Form</h2>
<div class="borda">
<ul>
    <li>Produto: <?=$produto?> </li>
    <li>Fabricante: <?=$fabricante?> </li>
    <li>Preço: R$ <?=number_format($preco, 2, ",", ".")?> </li>
    <li>Descrição: <?=nl2br($descricao)?> </li>
</ul>
</div> 
<?php
}
?>

</body>
</html>