<?php

use Dompdf\Dompdf;

session_start();

$connection = include_once '../db.php';
$query = "SELECT * FROM fornecedores";
$consulta_fornecedor = mysqli_query($connection, $query);

require_once '../dompdf/autoload.inc.php';

$dompdf = new Dompdf();

$html = "<img src='data:image/jpeg;base64,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' alt='Logo'>";
$html .= "<h1 style='text-align: center'>Empresa Xis</h1>";
$html .= "<table style=\"border: 1px solid #111111; margin: auto\">

    <tr><td style=\"border: 1px solid #111111; text-align: center\" colspan=\"6\">Planilha de Fornecedores</td></tr>
    <tr>
    <td style=\"border: 1px solid #111111; text-align: center\"><b>Empresa</b></td>
    <td style=\"border: 1px solid #111111; text-align: center\"><b>Contato</b></td>
    <td style=\"border: 1px solid #111111; text-align: center\"><b>Ramo</b></td>
    <td style=\"border: 1px solid #111111; text-align: center\"><b>Telefone</b></td>
    <td style=\"border: 1px solid #111111; text-align: center\"><b>WhatsApp</b></td></tr>
";

while($linha = mysqli_fetch_array($consulta_fornecedor)){

    $html .= '<tr>';
    $html .= '<td style="border: 1px solid #111111; text-align: center; padding: 15px">'.$linha['empresa'].'</td>';
    $html .= '<td style="border: 1px solid #111111; text-align: center; padding: 15px">'.$linha['contato'].'</td>';
    $html .= '<td style="border: 1px solid #111111; text-align: center; padding: 15px">'.$linha['ramo'].'</td>';
    $html .= '<td style="border: 1px solid #111111; text-align: center; padding: 15px">'.$linha['telefone'].'</td>';
    $html .= '<td style="border: 1px solid #111111; text-align: center; padding: 15px">'.$linha['whatsapp'].'</td>';
    $html .= '</tr>';

}

$html .= "</table>";
$html .= '<br><br>';
$html .= '<div style="text-align: center"><font face="verdana" size="20">Esse é apenas um documento de texto que mostra a tabela de planilha de fornecedores da empresa fictícia Xis.</font></div>';


$dompdf->loadHtml($html);

$dompdf->render();
$dompdf->stream("fornecedores", array("Attachment" => false));