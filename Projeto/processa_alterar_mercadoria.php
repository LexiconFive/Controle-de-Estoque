<?php

$connection = include 'db.php';

$id = $_POST['id'];
$produto = $_POST['produto'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

$query = "UPDATE tabela SET produto = '$produto', preco = $preco, quantidade = $quantidade
          WHERE id = $id";

mysqli_query($connection, $query);
header('location:index.php?pagina=home');