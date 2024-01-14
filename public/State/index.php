<?php

    use DesignPatterns\Comportamentais\State\Pedido;

    require_once __DIR__ . '/../../vendor/autoload.php';

    $pedido = new Pedido();
    $pedido->realizarPagamento();


