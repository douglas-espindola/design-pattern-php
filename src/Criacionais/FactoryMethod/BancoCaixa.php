<?php

namespace DesignPatterns\Criacionais\FactoryMethod;

class BancoCaixa
{
    public function gerarBoleto(int $vencimentoBoleto, float $valor): Boleto
    {
        switch ($vencimentoBoleto) {
            case 10:
                $boleto = new BancoCaixaBoleto10Dias($valor);
                break;
            case 30:
                $boleto = new BancoCaixaBoleto30Dias($valor);
                break;
            case 60:
                $boleto = new BancoCaixaBoleto60Dias($valor);
                break;
            default:
                throw new \Exception('Vencimento Indisponível');
        }

        echo 'Boleto gerado com sucesso no valor de R$ ' . $valor . '<br>';
        echo 'Valor Juros: R$' . $boleto->calcularJuros() . '<br>';
        echo 'Valor Desconto: R$' . $boleto->calcularDesconto() . '<br>';
        echo 'Valor Multa: R$' . $boleto->calcularMulta() . '<br>';
        echo '---------------' . '<br><br>';

        return $boleto;
    }
}
