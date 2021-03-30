<?php

include 'header.html';

if(isset($_GET['pagina'])){

    $pagina = $_GET['pagina'];

}
else{

    $pagina = NULL;
}

if($pagina == 'inserir_mercadoria'){

    include 'Mercadoria/inserir_mercadoria.html';

}elseif($pagina == 'inserir_fornecedor'){

include 'Fornecedor/inserir_fornecedor.html';

}elseif ($pagina == 'alterar_mercadoria') {

    include 'Mercadoria/alterar_mercadoria.php';

}elseif ($pagina == 'alterar_fornecedor'){

    include 'Fornecedor/alterar_fornecedor.php';

}elseif ($pagina == 'fornecedores'){

    include 'Fornecedor/fornecedores.php';

}

else{

    include 'home.php';
}
include 'footer.html';
