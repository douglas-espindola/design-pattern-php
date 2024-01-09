<?php

use DesignPatterns\Estruturais\Bridge\MensagemAdminEmail;
use DesignPatterns\Estruturais\Bridge\MensagemAdminSMS;
use DesignPatterns\Estruturais\Bridge\MensagemUsuarioEmail;
use DesignPatterns\Estruturais\Bridge\MensagemUsuarioSMS;

require_once __DIR__ . '/../../vendor/autoload.php';

$mensagem = new MensagemAdminEmail();
$mensagem->setAssunto('Primeira mensagem');
$mensagem->setMensagem('Olá Usuário');
$mensagem->enviar();

$mensagem = new MensagemUsuarioEmail();
$mensagem->setAssunto('Primeira mensagem');
$mensagem->setMensagem('Olá Administrador');
$mensagem->enviar();

$mensagem = new MensagemAdminSMS();
$mensagem->setAssunto('Segunda mensagem');
$mensagem->setMensagem('Olá Usuário');
$mensagem->enviar();

$mensagem = new MensagemUsuarioSMS();
$mensagem->setAssunto('Segunda mensagem');
$mensagem->setMensagem('Olá Administrador');
$mensagem->enviar();
