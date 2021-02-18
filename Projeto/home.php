<?php

    $connection = include 'db.php';

?>

<a class="button_inserir_item" href="?pagina=inserir_mercadoria"></a>
<table style="border:1px solid #ccc; width: 100% ;margin: auto">

    <caption style="font-weight: bold; font-size: 30px">Tabela de estoque</caption>
        <thead>
            <tr>

                <th>Produto</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Deletar</th>

            </tr>

        </thead>
    <tbody>

    <?php

    $query = "SELECT * FROM tabela";
    $consulta_estoque = mysqli_query($connection, $query);
    while($linha = mysqli_fetch_array($consulta_estoque)){

        echo '<td>'.$linha['produto'].'</td>';
        echo '<td>R$ '.$linha['preco'].'</td>';
        echo '<td>'.$linha['quantidade'].'</td>';
        echo '<td><form method="post" action="deletar_mercadoria.php">
                    <input type="hidden" name="id" value="'.$linha['id'].'">
                    <input type="submit"  value="Deletar">
                  </form></td></tr>';
    }

    ?>

    </tbody>

</table>

<br>