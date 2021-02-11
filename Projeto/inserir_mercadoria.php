<h1>Inserir Mercadoria</h1>
<br>

<form method="post" action="processa_inserir_mercadoria.php">

    <label>
        Nome do produto:
        <input type="text" name="produto">
        <br><br>
        Preço:
        <input type="number" required name="price" value="0" step=".01">
        <br><br>
        Quantidade:
        <input type="number" min="0">
        <br><br>
        <input type="submit" value="Cadastrar">
    </label>

</form>

<br>