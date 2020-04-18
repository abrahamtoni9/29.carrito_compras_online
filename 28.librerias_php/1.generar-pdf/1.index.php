<?php

require_once '../vendor/autoload.php';


//carga de namespace que tiene esa clase
use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();

// $html = '<h1 style="background:red">Hola mundo desde una libreria para hacer pdf</h1>';
// $html .= '<p>Este es un master de php de Victor Robles</p>' ;

//Recoger la vista a imprimir
ob_start();//lo que haya despues de la funcion ob_star() recoge e imprime
require_once '2.pdf_para_generar.php'; //imprime
$html = ob_get_clean(); // guardar dentro de una variable


$html2pdf->writeHTML($html);// luego se le pasa como para parametro a la funcion writeHTML
$html2pdf->output('pdf_generado.pdf');//genera el pdf
