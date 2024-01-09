<?php

use DesignPatterns\Estruturais\Proxy\Usuario;

require_once __DIR__ . '/../../vendor/autoload.php';

$inicio = microtime(true);

//Criação do Usuário
$pessoaFisica = new Usuario('João da Silva', '08844341921', 25);
echo $pessoaFisica->getNome();

echo '<br> # ' . round(microtime(true) - $inicio, 2) . " Segundos<br>";