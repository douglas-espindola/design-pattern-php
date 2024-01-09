<?php

namespace DesignPatterns\Estruturais\Composite;

class Pasta
{
    public string $nome;
    public string $caminho;
    public array $componentes;

    public function __construct(string $nome, string $caminho)
    {
        $this->nome = $nome;
        $this->caminho = $caminho;
        $this->componentes = [];
    }

    public function adicionar(Arquivo $componente): void
    {
        $this->componentes[] = $componente;
    }

    public function remover(Arquivo $component): void
    {
        foreach ($this->componentes as $indice => $arquivo) {
            if ($arquivo === $component) {
                unset($this->componentes[$indice]);
            }
        }
    }

    public function recuperarFilho(int $indice): Arquivo
    {
        return $this->componentes[$indice];
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCaminho(): string
    {
        return $this->caminho;
    }

    public function exibir(): void
    {
        echo '<div style="padding-left: 20px"><pre>';
        echo '## ' . $this->getNome() . ' - [' . $this->getCaminho() . '] ##</br>';
        echo '---------------------------------<br>';
        foreach ($this->componentes as $componente) {
            $componente->exibir();
        }
        echo '</pre></div>';
    }
}
