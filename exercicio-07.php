<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio-07</title>
    <style>
       
    </style>
</head>
<body>

<h1>Desenvolvendo Formulário</h1>
<hr>

<form action="form-post.php" method="POST">

<p>
    <label for="produto">Produto:</label>
    <input type="text" name="produto" id="produto">
</p>

<div>
    <label for="fabricante">Fabricante:</label>
    <select name="fabricante" id="fabricante">
        <option value=""></option>
<?php
$fabricantes = ["Coca-cola", "Fanta", "Guaraná", "Pepsi"];
foreach ($fabricantes as $fabricante){
?>
<?php    
}
?>
        <option value="Coca-Cola">Coca-cola</option>
        <option value="Fanta">Fanta</option>
        <option value="Guaraná">Guaraná</option>
        <option value="Pepsi">Pepsi</option>
    </select>
    <!-- <input type="submit" value="Submit" /> -->
</div>

<p>
    <label for="preco">Preço</label>
    <input type="number" name="preco" min="100" max="10000" step="0.01">
    


</p>

<div class="linha">
    <label for="descricao">Descrição:</label> <br>
    <textarea name="descricao" id="descricao" cols="30" rows="3"></textarea>
</div>

<button type="submit" name="enviar">Enviar dados</button>


</form>  
</body>
</html>