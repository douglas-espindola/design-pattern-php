<?php

use DesignPatterns\Estruturais\Facade\Consumidor;
use DesignPatterns\Estruturais\Facade\Produto;
use DesignPatterns\Estruturais\Facade\Vendas\EmailPedido;
use DesignPatterns\Estruturais\Facade\Vendas\PagamentoBoleto;
use DesignPatterns\Estruturais\Facade\Vendas\Pedido;

require_once __DIR__ . '/../../vendor/autoload.php';

//Criação do consumidor.
$consumidor = new Consumidor('Luiz da Silva', 12345678910, 'luiz@email.com');

//Criação de produtos.
$produto1 = new Produto('Blusa Rosa', 'Blusa feminina rosa', 80.99);
$produto2 = new Produto('Camiseta Preta', 'Camiseta masculina preta', 49.90);
$produto3 = new Produto('Calça Jeans', 'Calça Jeans Masculina', 119.90);

// ==== Até aqui apenas criamos os objetos básicos que uma venda precisa. ====
// ==== Agora vamos ao processo de venda propriamente dito. ====
//Criação do Pedido.
$pedido = new Pedido($consumidor);

//Adição dos produtos ao pedido.
$pedido->addProduto($produto1);
$pedido->addProduto($produto2);
$pedido->addProduto($produto3);

//Pagamento com boleto.
$pagamento = new PagamentoBoleto($pedido);
$email = new EmailPedido($pedido);

if ($pagamento->realizarPagamento()) {
    $email->enviarEmail('Pagamento realizado com sucesso via boleto');
} else {
    $email->enviarEmail('Falha no pagamento do boleto');
}
