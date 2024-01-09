<?php

namespace DesignPatterns\Comportamentais\Interpreter;

class Parser
{
    private array $pilha = [];
    private string $expressao;

    public function __construct(string $expressao)
    {
        $this->expressao = trim($expressao);
    }

    private function isOperacao(string $token): bool
    {
        $operacoes = ['+', '-', '*', '/'];
        return in_array($token, $operacoes);
    }

    private function parseNumero(string $token): Numero
    {
        $pilhaNumero = [];
        $tamanhoOperando = strlen($token);
        $direita = null;

        for ($i = 0; $i < $tamanhoOperando; $i++) {
            $parteToken = substr($token, $i, 1);

            if ($i == $tamanhoOperando - 1) {
                $pilhaNumero[] = new Digito($parteToken);

                while (count($pilhaNumero) > 0) {
                    $topoPilha = end($pilhaNumero);

                    if ($topoPilha instanceof Digito) {
                        if (is_null($direita)) {
                            $direita = new Numero($topoPilha);
                            array_pop($pilhaNumero);
                        } else {
                            $direita = new Numero($topoPilha, $direita);
                            array_pop($pilhaNumero);
                        }
                    }
                }
            } else {
                $pilhaNumero[] = new Digito($parteToken);
            }

        }

        return $direita;
    }


    public function parse(): Expressao
    {
        $expressao = explode(' ', $this->expressao);

        foreach ($expressao as $token) {
            if ($this->isOperacao($token)) {
                $operandoDireita = end($this->pilha);
                array_pop($this->pilha);
                $operandoEsquerda = end($this->pilha);
                array_pop($this->pilha);

                switch ($token) {
                    case '+':
                        $this->pilha[] = new Adicao($operandoEsquerda, $operandoDireita);
                        break;
                    case '-':
                        $this->pilha[] = new Subtracao($operandoEsquerda, $operandoDireita);
                        break;
                    case '*':
                        $this->pilha[] = new Multiplicacao($operandoEsquerda, $operandoDireita);
                        break;
                    case '/':
                        $this->pilha[] = new Divisao($operandoEsquerda, $operandoDireita);
                        break;
                }
            } elseif (is_numeric($token)) {
                $this->pilha[] = $this->parseNumero($token);
            } else {
                $this->pilha[] = new Variavel($token);
            }
        }
        return end($this->pilha);
    }
}
