<?php

$connection = include '../db.php';

$produto = $_POST['produto'];
$unidade = $_POST['unidade'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$preco_total = $preco * $quantidade;

$query = "INSERT INTO estoque (produto, unidade, preco, quantidade, precototal)
            VALUES('$produto', '$unidade', $preco, $quantidade, $preco_total)";

mysqli_query($connection, $query);
header('location:../index.php?pagina=home');

