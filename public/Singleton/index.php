<?php

use DesignPatterns\Criacionais\Singleton\MySql;

require_once __DIR__ . "/../../vendor/autoload.php";

echo "<pre>";

$bancoMySql1 = new MySql();

$query = 'CREATE TABLE usuario (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(100) NOT NULL,
            email VARCHAR(60),
            senha VARCHAR(100)
           )';

$bancoMySql1::executeQuery($query);

echo "<br>==== bancoMySql1 ====<br>";
echo $bancoMySql1;

$bancoMySql2 = new MySql();

echo "<br><br>==== bancoMySql2 ====<br>";
echo $bancoMySql2;

echo "<br><br>==== MUDANÇA DE USUÁRIO EM bancoMySql1 ====<br>";
$bancoMySql1->setUser('mariaDaSilva');

echo "<br>==== bancoMySql1 ====<br>";
echo $bancoMySql1;

echo "<br><br>==== bancoMySql2 ====<br>";
echo $bancoMySql2;

echo "</pre>";