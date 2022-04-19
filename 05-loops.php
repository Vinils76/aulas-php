<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops PHP</title>
    <style>
        .eta{
            color: green;
        }
    </style>
</head>
<body>
    <h1>Estruturas de Controle de Repetição</h1>
    <hr><h2>While (enquanto)</h2>

<?php
$i = 1;
while($i <= 5){
?>
    <p><?=$i?></p>
<?php    
    $i++;
}
?>

<hr>

<h2>do/while(repita)</h2>

<?php
$j = 1;
do {
?>
    <div class = "eta"> <h3>eta lasquera</h3></div>
<?php
$j++;
} while ($j <= 3);
?>

<hr>

<h2>for (para)</h2>

<?php
for ($i = 1; $i <= 10; $i++){ 
        echo $i. " ";   
}
?>

<?php
$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"]; 
?>

<ol>
<?php
for ($i = 0; $i < count($meses); $i++){  
?>

 <li><?=$meses[$i]?> </li>

<?php
}
?>
</ol>

<h2>foreach (para cada..)</h2> 
<ol>
    <?php foreach( $meses as $mes ) {?> 
    <li> <?=$mes?> </li>
    <?php } ?>
</ol>

<?php
// array associativo
$clubes = [
    "corinthias" => "Timão",
    "Palmeiras" => "Porco",
    "Santos" => "Peixe",
    "São Paulo" => "Tricolor"
];

 foreach( $clubes as $clube) { //Versão só com a associação
    ?>
    <p> <?=$clube?> </p>
<?php
}
?>

<?php
foreach( $clubes as $clube => $apelido) { // Versão como a variável e a associação
    ?>
    <p>O  <?=$clube?> é conhecido como: <?=$apelido?> </p>
<?php
}

$alunos = [
    [
        "nome" => "Chaves",
        "idade" => 8
    ],
    
    [
        "nome" => "chapolin",
        "idade" => 20
    ],
    
    [ 
        "nome" => "chiquinha",
        "idade" => "10"
    ]
    ];


foreach ($alunos as $aluno) {
?>
    <p> Nome: <?=$aluno["nome"]?></p>
    <p> Idade: <?=$aluno["idade"]?></p>
    <hr>

<?php
}
?>
        








    
</body>
</html>