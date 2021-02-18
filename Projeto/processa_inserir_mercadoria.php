<?php

$connection = include 'db.php';

$produto = $_POST['produto'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

$query = "INSERT INTO tabela (produto, preco, quantidade)
            VALUES('$produto', $preco, $quantidade)";

mysqli_query($connection, $query);
header('location:index.php?pagina=home');

