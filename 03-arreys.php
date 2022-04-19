<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando arrays PHP</title>
</head>
<body>
    <h1>Trabalhando com arreys (Vetores e Matrizes)</h1>
    <hr>

    <h2>Arrays com índices Numéricos</h2>

<?php
//constantes colchetes
    $bandas = ["savatage", "Iron Maiden", "Nightwish"];
//sintaxe arrays
    $cursos = array("HML5", "CSS3", "Nodejs", "Phothoshop");
//sintaxe indicando indices manualmente
    $comidaDeButeco[0] = "coxinha";
    $comidaDeButeco[1] = "kibe";
    $comidaDeButeco[2] = "esfirra";

//constantes com arrays
    define("UNIDADE_SENAC", ["Penha", "Tatuape", "Itaquera"]);
    const FRUTAS = ["Morango", "abacaxi"];
    
    
?>

<h3>Acessando os dados</h3>

<ol>
    <li>Uma das Bandas que mais gosto:
        <?=$bandas[2]?>
    </li>

    <li>Linguagem base da web:
        <?=$cursos[0]?>
    </li>

    <li>Vontade de:
        <?=$comidaDeButeco[1]?>
    </li>

    <li>Senac tem em:
        <?=UNIDADE_SENAC[0]?>
    </li>

    <li>Preciso comer:
        <?=FRUTAS[1]?>
    </li>
</ol>

<h2>Arrays Associativos</h2>

<?php
    //Chave associativa (identificação => valor)
    $curso = [
        "nome" => "Gastronomia",
        "cargaHoraria" => 150,
        "unidade" => "Penha",
        ];
?>

<p>Nome do curso: <?=$curso["nome"]?></p>
<p>CH: <?=$curso["cargaHoraria"]?> horas</p>
<p>Unidade: <?=$curso["unidade"]?></p>

<h2>Matriz (array dentro de array)</h2>

<?php
    //Planos de Estudos Front, Back, Design
    $estudos = [
        //0                       1          2
        ["Javascript avançado", "Noje.js", "React"], //0
        //0       1       2        3
        ["PHP", "POO", "MySQL", "Python"], //1
        //0                      1           2
        ["Teoria das cores", "Photoshop", "UX/UI"] //2
    ];
?>

<ol>
    <li><?=$estudos[0][2]?></li>
    <li><?=$estudos[1][0]?> / <?=$estudos[1][2]?></li>
    <li><?=$estudos[2][1]?> e <?=$estudos[2][0]?></li>
</ol>

<h2>Análise de arrays (debug/depuração)</h2>
<p><?php var_dump($bandas);?></p>
<p><?=var_dump($bandas);?></p>

<hr>

<p><?php print_r($bandas);?></p>
<p><?=print_r($bandas);?></p> 


    
</body>
</html>