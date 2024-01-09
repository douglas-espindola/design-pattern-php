<?php

namespace DesignPatterns\Comportamentais\Command\Fabricante;

class ArCondicionado
{
    private string $identificacao;
    private bool $estado;
    private int $temperatura;

    public function __construct(string $identificacao, bool $estado, int $temperatura)
    {
        $this->estado = $estado;
        $this->identificacao = $identificacao;
        $this->temperatura = $temperatura;
    }

    public function ligar()
    {
        $this->estado = true;
    }

    public function desligar()
    {
        $this->estado = false;
    }

    public function setTemperatura(int $temperatura): void
    {
        $this->temperatura = $temperatura;
    }

    public function getIdentificacao(): string
    {
        return $this->identificacao;
    }

    public function getEstado(): bool
    {
        return $this->estado;
    }

    public function getTemperatura(): int
    {
        return $this->temperatura;
    }

    public function imprimeObjeto(): void
    {
        $identificao = 'O objeto ' . $this->identificacao . ' está ';
        $identificao .= $this->estado ? "Ligado" : "Desligado";
        $identificao .= $this->estado ? ' a ' . $this->temperatura . ' graus celsius.' : ".";
        $identificao .= "<br>";
        echo $identificao;
    }
}
