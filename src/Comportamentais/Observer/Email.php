<?php

namespace DesignPatterns\Comportamentais\Observer;

class Email
{
    public static function enviarEmail(Observer $observer, string $mensagem)
    {
        echo '-----------------------------------------------------------------------------------<br>';
        echo 'Email enviado para ' . $observer->getNome() . ' - ' . $observer->getEmail() . '<br>';
        echo 'Mensagem: ' . $mensagem . '<br><br>';
    }
}