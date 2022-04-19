<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções do PHP</title>
</head>
<body>
    
<h1>Criando e usando funções</h1>
<hr>

<h2>Funçoes como sub-rotinas ou procedimento</h2>

<?php
    function dadosAutor() {
        echo "div";
        echo "<p>Antonio Vinicius L. da Silva</p>";
        echo "<p>Antoniovinicius7670@gmail.com</p>";
        echo "</div>";
    }
?>
<section>
    <h3>Chamada da sub-rotina</h3>
    <?=dadosAutor()?>
    
    <article>
        <h4>Outra chamada</h4>
        <?=dadosAutor()?>
    </article>
</section>

<hr>

<h2>Função  com retorno de dados</h2>
<?php
function dadosCurso (){
    return "téc. em informática para Internet";
}
?>
<p>Estamos no curso de <?=dadosCurso()?>. </p>
<p><?=dadosCurso()?> é ministrado no Senac Penha.</p>

<hr>

<h2>Função com parâmetros (ou argumentos)</h2>
<?php
//o terceiro parâmetro vai assumir zero caso não informado.
function soma($valor1,$valor2, $valor3 = 0) {
    $total = $valor1 + $valor2 + $valor3;// variavel local (dentro da function) não da pra buscar  
    return $total;
}
?>
<p> <?=soma(10, 20, 30)?> </p>
<p> <?=soma(34, 22, 31)?> </p>
<p> <?=soma(45, 23, 28)?> </p>

<?php $total = soma(1000, 2000, 3000); ?>
<p><?=$total?></p>

<?php
if( soma(400,300,400) > 1000) {
    echo "Resultado da função é maior/igual a 1000";
}

function verificaNegativo($valor) {
    if ($valor < 0) {
        return "Negativo";
    } else {
        return "Não é negativo";
    }
}; 
//return $valor < 0 ? "Negativo : "Não é Negativo"
?>

<p><?=verificaNegativo(10)?></p>
<p><?=verificaNegativo(-150)?></p>
<p><?=verificaNegativo(258.99)?></p>

<hr>

<h2>Função anônima (closure, lambda)</h2>
<?php
$formataPreco = function($valor) {
    return "R$ ".number_format($valor, 2, ",",".");

};
?>
<p> <?=$formataPreco(1000)?> </p>
<p> <?=$formataPreco(1500)?> </p>
<p> <?=$formataPreco(1500.23)?> </p>

<hr>

<h2>Indução de tipos</h2>

<?php
//float: valores numéricos podendo casa decimal
//int: valores numéricos inteiros
//string: caracteres
function calculaMedia(float $n1, float $n2):float {
    $media = ($n1 + $n2) / 2;
    return $media;
}
?>

<p> <?=calculaMedia(10, 7)?> </p>




    
</body>
</html>