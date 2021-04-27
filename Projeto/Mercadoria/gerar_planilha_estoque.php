<?php

    session_start();
    $connection = include_once '../db.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Arquivo</title>
</head>
<body>

    <?php

    $arquivo = "estoque.xls";
    $query = "SELECT * FROM estoque";
    $consulta_estoque = mysqli_query($connection, $query);

    $html = '';
    $html .= '<table border="1px">';
    $html .= '<tr>';
    $html .= '<td style="text-align: center" colspan="6">Planilha do Estoque</td>';
    $html .= '</tr>';

    $html .= '<tr>';
    $html .= '<td><b>Código</b></td>';
    $html .= '<td><b>Produto</b></td>';
    $html .= '<td><b>Unidade</b></td>';
    $html .= '<td><b>Preço (Unidade)</b></td>';
    $html .= '<td><b>Quantidade (Unidade)</b></td>';
    $html .= '<td><b>Preço Total</b></td>';
    $html .= '</tr>';

    while($linha = mysqli_fetch_array($consulta_estoque)){

        $html .= '<tr>';
        $html .= '<td style="text-align: center">'.$linha['id'].'</td>';
        $html .= '<td style="text-align: center">'.$linha['produto'].'</td>';
        $html .= '<td style="text-align: center">'.$linha['unidade'].'</td>';
        $html .= '<td style="text-align: center">'.$linha['preco'].'</td>';
        $html .= '<td style="text-align: center">'.$linha['quantidade'].'</td>';
        $html .= '<td style="text-align: center">'.$linha['precototal'].'</td>';
        $html .= '</tr>';

    }
    $html .= '</table>';

    header("Cache-Control: max-age=0");
    header("Cache-Control: max-age=1");
    header("Content-type: application/x-msexcel");
    header('Content-Disposition: attachment;filename="'.$arquivo.'"');
    header("Content-Description: PHP Generated Data");
    echo $html;
    exit;

    ?>

</body>
</html>