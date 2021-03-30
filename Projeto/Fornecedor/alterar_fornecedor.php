<h1>Alterar Fornecedor</h1>

<script>

    function aviso(){

        alert("Fornecedor alterado com sucesso!");

    }

</script>

<?php

$connection = include 'db.php';

$id = $_POST['id'];

$query = "SELECT * FROM fornecedores 
          WHERE id = $id";

$consulta_fornecedor = mysqli_query($connection, $query);

while($linha = mysqli_fetch_array($consulta_fornecedor)) {
    ?>

    <form method="post" action="Fornecedor/processa_alterar_fornecedor.php">

        <label>

            <input type="hidden" name="id" value="<?php echo $id; ?>">
            Nome do fornecedor:
            <input type="text" name="fornecedor" value="<?php echo $linha['empresa']; ?>">
            <br><br>
            Contato:
            <input type="text" name="contato" value="<?php echo $linha['contato']; ?>">
            <br><br>
            Ramo:
            <input type="text" name="ramo" value="<?php echo $linha['ramo']; ?>">
            <br><br>
            Telefone:
            <input type="text" name="telefone" value="<?php echo $linha['telefone']; ?>">
            <br><br>
            WhatsApp:
            <input type="text" name="whatsapp" value="<?php echo $linha['whatsapp']; ?>">
            <br><br>
            <input style="background-color: green" type="submit" value="Alterar" onclick="aviso()">
            <br><br>

        </label>

    </form>

    <form action="Fornecedor/cancelar_fornecedor.php">

        <input style="background-color: indianred" type="submit" value="Cancelar">
        <br><br>

    </form>
<?php

}