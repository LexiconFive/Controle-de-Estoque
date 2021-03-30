<?php

$connection = include '../db.php';

$id = $_POST['id'];

$query = "DELETE FROM fornecedores
          WHERE id = $id";

mysqli_query($connection, $query);

header('location:../index.php?pagina=fornecedores');