<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Me lascando</title>
    <style>
         table, td, th {
            border: 1px solid black;
        }
        th {
            background: orange;
            }
        td {
            background: lightgray;
        }
         tr:nth-child(even) {background: black}
        /* formatação zebrada ( tr:nth-child(even) {background: "qualquer"})*/
        
    </style>
</head>
<body>

<h1>Exercicio 04 </h1>

<?php
$i = 1;
?>

<?php
$cursos = [
    [
        "id" => $i++,
        "nome" => "HTML",
        "descricao" => "Estruturação"
    ],
    
    [
        "id" => $i++,
        "nome" => "CSS",
        "descricao" => "Estilos"
    ],
    
    [ 
        "id" => $i++,
        "nome" => "JS",
        "descricao" => "Comportamentos"
    ],

    [
        "id" => $i++,
        "nome" => "PHP",
        "descricao" => "Back-end"
    ]
    ];
    
extract($cursos);
    
?>

<table><tbody>
<tr>
    <th>ID</th>
    <th>Linguagem</th>
    <th>Descrição</th>

<?php
foreach ($cursos as $curso) {
?>
 </tr>

 <tr>
<td><?=$id?></td>   
<td><?=$nome?></td>
<td><?=$descricao?></td>
</tr>


<?php
}
?>

</tbody></table>
    
</body>
</html>