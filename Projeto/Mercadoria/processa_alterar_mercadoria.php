<?php

$connection = include '../db.php';

$id = $_POST['id'];
$produto = $_POST['produto'];
$unidade = $_POST['unidade'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$preco_total = $preco * $quantidade;

$query = "UPDATE estoque SET produto = '$produto', unidade = '$unidade',preco = $preco, quantidade = $quantidade, precototal = $preco_total
          WHERE id = $id";

mysqli_query($connection, $query);
header('location:../index.php?pagina=home');