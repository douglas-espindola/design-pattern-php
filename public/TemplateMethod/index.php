<?php

use DesignPatterns\Comportamentais\TemplateMethod\Gateway;
use DesignPatterns\Comportamentais\TemplateMethod\PagamentoCredito;
use DesignPatterns\Comportamentais\TemplateMethod\PagamentoDebito;
use DesignPatterns\Comportamentais\TemplateMethod\PagamentoDinheiro;

require_once __DIR__ . "/../../vendor/autoload.php";

$valor = 1000;
$gateway = new Gateway();

echo 'Crédito: ';
$pagamentoCredito = new PagamentoCredito($valor, $gateway);
$pagamentoCredito->realizaCobranca();

echo 'Débito: ';
$pagamentoDebito = new PagamentoDebito($valor, $gateway);
$pagamentoDebito->realizaCobranca();

echo 'Dinheiro: ';
$pagamentoDinheiro = new PagamentoDinheiro($valor, $gateway);
$pagamentoDinheiro->realizaCobranca();