<?php

$connection = include 'db.php';

$fornecedor = $_POST['fornecedor'];
$contato = $_POST['contato'];
$ramo = $_POST['ramo'];
$telefone = $_POST['telefone'];
$whatsapp = $_POST['whatsapp'];

$query = "INSERT INTO fornecedores (empresa, contato, ramo, telefone, whatsapp)
          VALUES ('$fornecedor', '$contato', '$ramo', '$telefone', '$whatsapp') ";

mysqli_query($connection, $query);

header('location:index.php?pagina=fornecedores');

