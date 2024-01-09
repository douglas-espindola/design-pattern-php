<?php

use DesignPatterns\Estruturais\Composite\Arquivo;
use DesignPatterns\Estruturais\Composite\Pasta;

require_once __DIR__ . '/../../vendor/autoload.php';

//Criação da pasta raiz e demais pastas
$raiz = new Pasta('Raiz', '/');

//Criação dos arquivos.
$arquivo1 = new Arquivo('Arquivo 1', '/arquivo1');
$arquivo2 = new Arquivo('Arquivo 2', '/arquivo2');
$arquivo3 = new Arquivo('Arquivo 3', '/arquivo3');
$arquivo4 = new Arquivo('Arquivo 4', '/arquivo4');
$arquivo5 = new Arquivo('Arquivo 5', '/arquivo5');
$arquivo6 = new Arquivo('Arquivo 6', '/arquivo6');

//Adição dos arquivos as pastas conforme dita nossa Hierarquia de diretórios.
$raiz->adicionar($arquivo1);
$raiz->adicionar($arquivo2);
$raiz->adicionar($arquivo3);
$raiz->adicionar($arquivo4);
$raiz->adicionar($arquivo5);
$raiz->adicionar($arquivo6);

$raiz->exibir();