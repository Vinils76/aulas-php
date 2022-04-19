<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe em Geral</title>
    <style>
        .destaque {
            color: red;
        }
    </style>
</head>
<body>
    <h1 class= "destaque">Trabalhando com php</h1>
    <hr>

<?php
// geração de texto
    echo "Amanhã tem corinthias e palmeiras!";
// geração de texto estruturada (com tags, atributos)
    echo "<h2>Gerando <span class=\"destaque\">HTML</span> através de PHP.</h2>";
?>    
</body>
</html>