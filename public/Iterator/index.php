<?php

require_once __DIR__ . "/../../vendor/autoload.php";

$lista = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$matriz = [ 0 => [1, 2, 3],
            1 => [4, 5, 6],
            2 => [7, 8, 9]];

//#### Iterações ####

//## Lista ##
$tamanho = 9; //Tamanho da lista

echo "Elementos da Lista: <br>";

for ($i = 0; $i < $tamanho; $i++) {
    echo $lista[$i] . ' ';
}

//## Matriz ##

$qtdLinhas = 3; //Quantidade de linhas da matriz.
$qtdColunas = 3; //Quantidade de colunas da matriz.

echo "<br><br>Elementos da Matriz: <br>";

for ($linha = 0; $linha < $qtdLinhas; $linha++) {
    for ($coluna = 0; $coluna < $qtdColunas; $coluna++) {
        echo $matriz[$linha][$coluna] . ' ';
    }
}
