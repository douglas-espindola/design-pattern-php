<?php

use DesignPatterns\Criacionais\Builder\GeradorPDF;

require_once __DIR__ . '/../../vendor/autoload.php';

echo '## Criação do objeto A4 ##<br>';
$pdf = new GeradorPDF(
    'portrait', //pageOrientation
    'mm', //unit
    210, //PageSizeX
    297, //PageSizeY
    30, //marginTop
    20, //marginRight
    30, //marginBottom
    20, //marginLeft
    true, //hasHeader
    15, //headerHeigh
    true, //hasFooter
    15, //footerHeigh
    '#ffffff', //pageColor
    'UTF-8' //encode
);

//Impressão do Objeto A4
echo $pdf;

echo '<br>## Criação do objeto A3 ##<br>';

$pdf = new GeradorPDF(
    'portrait', //pageOrientation
    'mm', //unit
    297, //PageSizeX
    420, //PageSizeY
    60, //marginTop
    40, //marginRight
    60, //marginBottom
    40, //marginLeft
    false, //hasHeader
    0, //headerHeigh
    false, //hasFooter
    0, //footerHeigh
    '#ffffff', //pageColor
    'UTF-8' //encode
);

//Impressão do Objeto A3
echo $pdf;
