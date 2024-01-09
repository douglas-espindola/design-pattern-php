<?php

use DesignPatterns\Estruturais\Adapter\Cobranca;
use DesignPatterns\Estruturais\Adapter\Terceiros\PagFacil;

require_once __DIR__ . '/../../vendor/autoload.php';

$pagFacil = new PagFacil();

$cobranca = new Cobranca($pagFacil);

$cobranca->setValor(100);
$cobranca->setParcelas(3);
$cobranca->setNumeroCartao(1234123412341234);
$cobranca->setCVV(123);

if ($cobranca->realizarPagamento()) {
    echo 'Pagamento Realizado com sucesso <br>';
} else {
    echo 'O pagamento falhou <br>';
}