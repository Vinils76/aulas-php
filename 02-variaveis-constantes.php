<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Váriaveis e Constantes</title>
    <style>
        <?php $cor = "purple"; ?>
        p {color: <?=$cor?>}
    </style>
</head>
<body>
    <h1>Manipulando dados na memória</h1>
    <hr>
<?php
    //váriaveis "$"
    $curso = "Técnico de Informática para Internet"; // string
    $ano = 2022; //Valor inteiro (integer) não se usa aspas;
    $preco = 2500.45; //real (float)
    
    echo "<h2>Saídas de dados usando echo e a sintaxe completa</h2>";
    echo "<p>$curso</p>"; // aspa dupla pemite interpolação (váriavel e texto)
    echo '<p>$curso</p>'; // aspa simples encara tudo como texto
    echo "<p>$ano</p>";
    echo "<p>$preco</p>";

    echo "<p>Estamos fazendo o curso $curso no ano de $ano</p>";
?>

<h2>Saída de dados usando sintaxe simplificada</h2>
<p> <?php echo $curso ?> </p>
<p> <?=$curso?> </p>

<p>Estamos fazendo o curso <?=$curso?> no ano de <?=$ano?> </p>

<hr>

<?php
    //constantes

    //1ª forma: usando a função define ("NOME", "VALOR")
    define("MEU_NOME", "Antonio");

     //2ª forma: usando a função define ("NOME", "VALOR")
     const ESCOLA = "Senac Penha";
?>

<p>Olá me chamo <?=MEU_NOME?> </p>
<p>Estou estudando no <b> <?=ESCOLA?> </b> </p>

<?php // Versão contatenada
    echo "<p>Olá me chamo ".MEU_NOME."</p>";
    echo "<p>Estou estudando no <b>".ESCOLA."</b> </p>";
?>

</body>
</html>