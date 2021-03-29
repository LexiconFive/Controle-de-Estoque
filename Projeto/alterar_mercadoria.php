<h1>Alterar mercadoria</h1>
<br>

<script>

    function aviso(){

        alert("Mercadoria alterada com sucesso!");

    }

</script>

<?php

$connection = include 'db.php';

$id = $_POST['id'];

$query = "SELECT * FROM estoque 
          WHERE id = $id";

$consulta_estoque = mysqli_query($connection, $query);

while($linha = mysqli_fetch_array($consulta_estoque)) {

    ?>
    <form method="post" action="processa_alterar_mercadoria.php">

        <label>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            Nome do produto:
            <input type="text" name="produto" value="<?php echo $linha['produto']; ?>">
            <br><br>
            Unidade:
            <select name="unidade">
                <option selected><?php echo $linha['unidade']?></option>
                <?php
                if($linha['unidade'] == 'Kg'){?>

                    <option>Unitário</option><?php
                }else{?>

                    <option>Kg</option><?php
                }
                ?>
            </select>
            <br><br>
            Preço (Kg):
            <input type="number" name="preco" value="<?php echo $linha['preco'];?>" step=".01">
            <br><br>
            Quantidade (Kg):
            <input type="number" min="0" name="quantidade" value="<?php echo $linha['quantidade'] ?>">
            <br><br>
            <input type="submit" onclick="aviso()" value="Alterar">

        </label>

    </form>

<?php
}


?>

<br>


