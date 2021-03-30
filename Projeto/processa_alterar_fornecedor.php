<?php

$connection = include 'db.php';

$id = $_POST['id'];
$fornecedor = $_POST['fornecedor'];
$contato = $_POST['contato'];
$ramo = $_POST['ramo'];
$telefone = $_POST['telefone'];
$whatsapp = $_POST['whatsapp'];

$query = "UPDATE fornecedores SET empresa = '$fornecedor', contato = '$contato', ramo = '$ramo', telefone = '$telefone', whatsapp = '$whatsapp'
          WHERE id = $id";

mysqli_query($connection, $query);
header('location:index.php?pagina=fornecedores');