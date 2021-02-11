<?php

include 'header.html';

if(isset($_GET['pagina'])){

    $pagina = $_GET['pagina'];

}
else{

    $pagina = NULL;
}

if($pagina == 'inserir_mercadoria'){

    include 'inserir_mercadoria.html';

}else{

    include 'home.php';
}
include 'footer.html';
