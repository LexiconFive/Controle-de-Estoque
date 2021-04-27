<?php

use Dompdf\Dompdf;

session_start();

//MySQL

$connection = include_once '../db.php';
$query = "SELECT * FROM estoque";
$consulta_estoque = mysqli_query($connection, $query);

require_once '../dompdf/autoload.inc.php';

$dompdf = new Dompdf();

$html = "<h1 style='text-align: center'>Empresa Xis</h1>";

$html .= "<table style=\"border: 1px solid #111111; margin: auto\">

    <tr><td style=\"border: 1px solid #111111; text-align: center\" colspan=\"6\">Planilha do Estoque</td></tr>
    <tr>
    <td style=\"border: 1px solid #111111\"><b>Código</b></td>
    <td style=\"border: 1px solid #111111\"><b>Produto</b></td>
    <td style=\"border: 1px solid #111111\"><b>Unidade</b></td>
    <td style=\"border: 1px solid #111111\"><b>Preço (Unidade)</b></td>
    <td style=\"border: 1px solid #111111\"><b>Quantidade (Unidade)</b></td>
    <td style=\"border: 1px solid #111111\"><b>Preço Total</b></td>     
";

while($linha = mysqli_fetch_array($consulta_estoque)){

    $html .= '<tr>';
    $html .= '<td style="border: 1px solid #111111; text-align: center">'.$linha['id'].'</td>';
    $html .= '<td style="border: 1px solid #111111;text-align: center">'.$linha['produto'].'</td>';
    $html .= '<td style="border: 1px solid #111111;text-align: center">'.$linha['unidade'].'</td>';
    $html .= '<td style="border: 1px solid #111111;text-align: center">R$ '.$linha['preco'].'</td>';
    $html .= '<td style="border: 1px solid #111111;text-align: center">'.$linha['quantidade'].'</td>';
    $html .= '<td style="border: 1px solid #111111;text-align: center">R$ '.$linha['precototal'].'</td>';
    $html .= '</tr>';

}

$html .= '</table>';

$dompdf->loadHtml($html);

$dompdf->render();
$dompdf->stream("estoque", array("Attachment" => false));
