<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento POST</title>
    <style>
        .aviso{
            color: red;
        }
    </style>
</head>
<body>

<h1>Processamento de dados usando POST</h1>
<hr>
<!-- POST não aparece o caminho feito e nem os dados na URL do site -->

<?php
if( empty($_POST['nome']) || empty($_POST["email"])) {
?>

<p class="aviso">Você deve preencher o nome ou email!</p>

<?php
} else {
?>


<?php
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $mensagem = filter_input(INPUT_POST, "mensagem", FILTER_SANITIZE_SPECIAL_CHARS);
    $interesses = filter_var_array($interesses = $_POST['interesses'] ?? [], FILTER_SANITIZE_SPECIAL_CHARS);

    /* Usando o operador de coalecêmcia nula ??
    Se houver interesses, armazene seus valores.
    Senão, deixe o array vazio. 
    $interesses = $_POST['interesses'] ?? [];
    */

    $informativos = filter_input(INPUT_POST, "informativos", FILTER_SANITIZE_SPECIAL_CHARS);
?>

<h2>Dados:</h2>

<ul>
    <li>Nome: <?=$nome?> </li>
    <li>Idade: <?=$idade?> anos</li>
    <li>E-mail: <?=$email?> </li>
    <li>Informativos: <?=$informativos?> </li>
<?php if( !empty($interesses)) { ?>
    <!-- implodir o array transformando em string -->
    <li>Interesses: <?=implode(", ", $interesses)?> </li>
    <li>Interesses: 
        <ul>
            <!-- acessando o array usando loop -->
        <?php foreach($interesses as $interesse){?>
        <li> <?=$interesse?> </li>
        <?php } ?>
        </ul>
    </li>
<?php } ?>

    <li>Mensagem: <?=$mensagem?> </li>
</ul>    

<?php
//fim if/else da validação de campos obrigatórios
}
?>

</body>
</html>