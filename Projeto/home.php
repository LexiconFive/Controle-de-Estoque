<?php

    $connection = include 'db.php';

?>

<a class="button_inserir_item" href="?pagina=inserir_mercadoria">Inserir Mercadoria</a>
<table style="border:1px solid #ccc; width: 100% ;margin: auto">

    <caption style="font-weight: bold; font-size: 30px">Tabela de estoque</caption>
        <thead>
            <tr>

                <th>Código</th>
                <th>Produto</th>
                <th>Preço</th>
                <th>Quantidade</th>

            </tr>

        </thead>
    <tbody>

    <?php

    $query = "SELECT * FROM tabela";
    $consulta_estoque = mysqli_query($connection, $query);
    while($linha = mysqli_fetch_array($consulta_estoque)){

        echo '<tr><td>'.$linha['id'].'</td>';
        echo '<td>'.$linha['produto'].'</td>';
        echo '<td>R$ '.$linha['preco'].'</td>';
        echo '<td>'.$linha['quantidade'].'</td></tr>';
    }

    ?>

    </tbody>

</table>

<br>