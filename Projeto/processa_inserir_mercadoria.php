<?php

$connection = include 'db.php';

$produto = $_POST['produto'];
$unidade = $_POST['unidade'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

$query = "INSERT INTO estoque (produto, unidade, preco, quantidade)
            VALUES('$produto', '$unidade', $preco, $quantidade)";

mysqli_query($connection, $query);
header('location:index.php?pagina=home');

