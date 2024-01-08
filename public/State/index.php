<?php

    use DesignPatterns\Comportamentais\State\Pedido;

    require_once __DIR__ . '/../../vendor/autoload.php';

    $pedido = new Pedido();
    try {
        $pedido->sucessoAoPagar();
        $pedido->cancelarPedido();
        $pedido->despacharPedido();
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
