<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio de arrey</title>

       <style>
       section {
           padding: 5px;
           shadow: 1px 1px 5px;
           width: 50vw;
           
           
       } 
    </style>
</head>
<body>

<h1>Exercício do caramba </h1>
<hr>

<?php
    $dados_1 = ["AntoniovlSilva", "Antonio@gmail", "1234", 20, "Masculino", "São Paulo"];
    $dados_2 = ["CamilaOlvr","limões@gmail", "4321", 18, "Feminino", "São Paulo"];
?>

<section class="dados_1">

<h2>Dados 1</h2>

<p>Nome de Usuário: <?=$dados_1[0]?></p>
<p>E-mail: <?=$dados_1[1]?></p>
<p>Idade: <?=$dados_1[3]?> anos </p>
<p>Sexo: <?=$dados_1[4]?></p>
<p>Cidade: <?=$dados_1[5]?></p>
</section>

<section class="dados_2">

<h2>Dados 2</h2>

<p>Nome de Usuário: <?=$dados_2[0]?></p>
<p>E-mail: <?=$dados_2[1]?></p>
<p>Idade: <?=$dados_2[3]?> anos </p>
<P>Sexo: <?=$dados_2[4]?></P>
<p>Cidade: <?=$dados_2[5]?></p>
</section>
    
</body>
</html>