<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processando o formulário</title>
</head>
<body>

<h1>Dados form</h1>
<hr>

<?php
if( empty($_POST['produto']) || empty($_POST["preço"])) {
?>

<?php
} else {
?>

<?php
$produto = filter_input(INPUT_POST, "produto", FILTER_SANITIZE_SPECIAL_CHARS);
$fabricante = filter_input(INPUT_POST, "fabricante", FILTER_SANITIZE_SPECIAL_CHARS);
$preco = filter_input(INPUT_POST, "produto", FILTER_SANITIZE_NUMBER_INT);
$descricao = filter_input(INPUT_POST, "produto", FILTER_SANITIZE_SPECIAL_CHARS);
?>
    
</body>
</html>