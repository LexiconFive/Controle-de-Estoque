<?php

    $connection = include 'db.php';

?>

<script>

    function aviso(){

        alert("Mercadoria deletada com sucesso!");

    }

</script>

<script lang=javascript type="text/javascript">

</script>

<a class="button_inserir_item" href="?pagina=inserir_mercadoria"></a>
<a class="button_calculadora" href="calculadora.php">Pop Up</a>
<table style="border:1px solid #ccc; width: 100% ;margin: auto">

    <caption style="font-weight: bold; font-size: 30px">Tabela de estoque</caption>
        <thead>
            <tr>

                <th>Produto</th>
                <th>Unidade</th>
                <th>Preço (Unidade)</th>
                <th>Quantidade (Unidade)</th>
                <th>Deletar</th>
                <th>Editar</th>

            </tr>

        </thead>
    <tbody>

    <?php

    $query = "SELECT * FROM estoque";
    $consulta_estoque = mysqli_query($connection, $query);
    while($linha = mysqli_fetch_array($consulta_estoque)){

        echo '<td>'.$linha['produto'].'</td>';
        echo '<td>'.$linha['unidade'].'</td>';
        echo '<td>R$ '.$linha['preco'].'</td>';
        echo '<td>'.$linha['quantidade'].'</td>';
        echo '<td><form method="post" action="deletar_mercadoria.php">
                    <input type="hidden" name="id" value="'.$linha['id'].'">
                    <input class="button_deletar" type="submit" onclick="aviso()" value="Deletar">
                  </form></td>';
        echo '<td><form method="post" action="?pagina=alterar_mercadoria">
                    <input type="hidden" name="id" value="'.$linha['id'].'">
                    <input class="button_editar" type="submit"  value="Editar">
                  </form></td></tr>';
    }

    ?>

    </tbody>

</table>

<br>