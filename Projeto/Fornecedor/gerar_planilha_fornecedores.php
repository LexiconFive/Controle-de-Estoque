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

$arquivo = "fornecedor.xls";
$query = "SELECT * FROM fornecedores";
$consulta_fornecedor = mysqli_query($connection, $query);

$html = '';
$html .= '<table border="1">';
$html .= '<tr>';
$html .= '<td colspan="5">Planilha de Fornecedores </td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td><b>Empresa</b></td>';
$html .= '<td><b>Contato</b></td>';
$html .= '<td><b>Ramo</b></td>';
$html .= '<td><b>Telefone</b></td>';
$html .= '<td><b>WhatsApp</b></td>';
$html .= '</tr>';

while($linha = mysqli_fetch_array($consulta_fornecedor)){

    $html .= '<tr>';
    $html .= '<td>'.$linha['empresa'].'</td>';
    $html .= '<td>'.$linha['contato'].'</td>';
    $html .= '<td>'.$linha['ramo'].'</td>';
    $html .= '<td>'.$linha['telefone'].'</td>';
    $html .= '<td>'.$linha['whatsapp'].'</td>';
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
