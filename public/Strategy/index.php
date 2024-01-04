<?php

    use DesignPatterns\Comportamentais\Strategy\PedidoEletronicos;
    use DesignPatterns\Comportamentais\Strategy\PedidoMoveis;
    use DesignPatterns\Comportamentais\Strategy\Strategies\FreteComum;
    use DesignPatterns\Comportamentais\Strategy\Strategies\FreteExpresso;

    require_once __DIR__ . '/../../vendor/autoload.php';

    $pedido = new PedidoEletronicos();
    $pedido->setValor(100);
    $pedido->setTipoFrete(new FreteComum());
    echo "Frete: " . $pedido->calculaFrete() . "<br>";


    $pedido = new PedidoMoveis();
    $pedido->setValor(100);
    $pedido->setTipoFrete(new FreteExpresso());
    echo "Frete: " . $pedido->calculaFrete() . "<br>";
