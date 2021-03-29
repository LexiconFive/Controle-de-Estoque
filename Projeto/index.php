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

}elseif ($pagina == 'alterar_mercadoria') {

    include 'alterar_mercadoria.php';

}elseif ($pagina == 'fornecedores'){

    include 'fornecedores.php';

}else{

    include 'home.php';
}
include 'footer.html';
