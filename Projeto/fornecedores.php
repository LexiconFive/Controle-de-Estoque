<?php

$connection = include 'db.php';

?>

<a class="button_inserir_fornecedor" href="?pagina=inserir_fornecedor">Inserir</a>
<table style="border:1px solid #ccc; width: 100% ;margin: auto">

    <caption style="font-weight: bold; font-size: 30px">Tabela de fornecedores</caption>
    <thead>
    <tr>

        <th>Empresa</th>
        <th>Contato</th>
        <th>Ramo</th>
        <th>Telefone</th>
        <th>WhatsApp</th>
        <th>Deletar</th>
        <th>Editar</th>


    </tr>

    </thead>
    <tbody>

    <?php

    $query = "SELECT * FROM fornecedores";
    $consulta_estoque = mysqli_query($connection, $query);
    while($linha = mysqli_fetch_array($consulta_estoque)){

        echo '<td>'.$linha['empresa'].'</td>';
        echo '<td>'.$linha['contato'].'</td>';
        echo '<td>'.$linha['ramo'].'</td>';
        echo '<td>'.$linha['telefone'].'</td>';
        echo '<td>'.$linha['whatsapp'].'</td>';
        echo '<td><form method="post" action="deletar_fornecedor.php">
                    <input type="hidden" name="id" value="'.$linha['id'].'">
                    <input class="button_deletar" type="submit" onclick="aviso()" value="Deletar">
                  </form></td>';
        echo '<td><form method="post" action="?pagina=alterar_fornecedor">
                    <input type="hidden" name="id" value="'.$linha['id'].'">
                    <input class="button_editar" type="submit"  value="Editar">
                  </form></td></tr>';
    }

    ?>

    </tbody>

</table>

<br>
