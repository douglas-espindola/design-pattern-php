<?php

namespace DesignPatterns\Estruturais\Bridge;

class MensagemUsuarioEmail extends Mensagem
{
    public function enviar()
    {
        echo 'Mensagem enviada pelo USUÁRIO<br>';
        echo "=== Mensagem Enviada por E-MAIL ===<br>";
        echo 'ASSUNTO: ' . $this->assunto . '<br>';
        echo "-----------------<br>";
        echo 'MENSAGEM: ' . $this->mensagem . '<br><br>';
    }
}
