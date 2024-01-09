<?php

namespace DesignPatterns\Comportamentais\Command\Fabricante;

class Lampada
{
    private string $identificacao;
    private bool $estado;

    public function __construct(string $identificacao, bool $estado)
    {
        $this->estado = $estado;
        $this->identificacao = $identificacao;
    }

    public function ligar(): void
    {
        $this->estado = true;
    }

    public function desligar(): void
    {
        $this->estado = false;
    }

    public function getIdentificacao(): string
    {
        return $this->identificacao;
    }

    public function getEstado(): bool
    {
        return $this->estado;
    }

    public function imprimeObjeto()
    {
        $identificao = 'O objeto ' . $this->identificacao . ' está ';
        $identificao .= $this->estado ? "Ligado." : "Desligado.";
        $identificao .= "<br>";
        echo $identificao;
    }
}
