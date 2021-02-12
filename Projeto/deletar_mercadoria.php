<?php

$connection = include 'db.php';

$produto = $_POST['produto'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

$query = "";

mysqli_query($connection, $query);

header('location:index.php?pagina=home');

