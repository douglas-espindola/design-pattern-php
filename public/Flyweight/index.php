<?php

use DesignPatterns\Estruturais\Flyweight\Plantacao;

require_once __DIR__ . '/../../vendor/autoload.php';

$iteracoes = 10;

$plantacao = new Plantacao();

for ($i = 0; $i < $iteracoes; $i++) {
    $plantacao->addArvore(rand(0, 500), rand(0, 500), 'Ipê', '#2caf1e', 10);
    $plantacao->addArvore(rand(0, 500), rand(0, 500), 'Palmeira', '#008a29', 7);
    $plantacao->addArvore(rand(0, 500), rand(0, 500), 'Jabuticabeira', '#00b626', 5);
}

echo '<pre>';
echo "### Árvores ###<br>";
print_r($plantacao->retornaArvores());
echo "</pre>";