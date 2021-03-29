<?php

$connection = include 'db.php';

$id = $_POST['id'];

$query = "DELETE FROM estoque
          WHERE id = $id";

mysqli_query($connection, $query);

header('location:index.php?pagina=home');




