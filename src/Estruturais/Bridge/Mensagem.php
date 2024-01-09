<?php

namespace DesignPatterns\Estruturais\Bridge;

abstract class Mensagem
{
    protected string $assunto;
    protected string $mensagem;

    public function setAssunto(string $assunto): void
    {
        $this->assunto = $assunto;
    }

    public function setMensagem(string $mensagem): void
    {
        $this->mensagem = $mensagem;
    }

    abstract public function enviar();
}
