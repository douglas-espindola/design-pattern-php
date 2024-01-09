<?php

namespace DesignPatterns\Estruturais\Facade\Vendas;

use DesignPatterns\Estruturais\Facade\Consumidor;
use DesignPatterns\Estruturais\Facade\Produto;

class Pedido
{
    private Consumidor $consumidor;
    private array $produtos;
    private float $valor = 0;

    public function __construct(Consumidor $consumidor)
    {
        $this->consumidor = $consumidor;
    }

    public function setConsumidor(Consumidor $consumidor): void
    {
        $this->consumidor = $consumidor;
    }

    public function addProduto(Produto $produto): void
    {
        $this->produtos[] = $produto;
        $this->valor += $produto->getValor();
    }

    public function getConsumidor(): Consumidor
    {
        return $this->consumidor;
    }

    public function getProdutos(): array
    {
        return $this->produtos;
    }

    public function getValor(): float
    {
        return $this->valor;
    }
}
