<?php

use DesignPatterns\Comportamentais\Memento\TextBox;

require_once __DIR__ . '/../../vendor/autoload.php';

$textBox = new TextBox(20, 100);

$textBox->setText('Teste de caixa de texto.');
$textBox->setFontWeight('bold');
$textBox->setFontFamily('Cursive');
$textBox->setFontSize(25);

$textBox->imprimir();

$textBox->setText('Teste de caixa de texto editado.');
$textBox->setFontWeight('normal');
$textBox->setFontFamily('monospace');
$textBox->setFontSize(15);
$textBox->setPosition(40, 110);

$textBox->imprimir();

$textBox->setText('Teste de caixa de texto editado.');
$textBox->setFontWeight('normal');
$textBox->setFontFamily('fantasy');
$textBox->setFontSize(12);
$textBox->setPosition(60, 120);

$textBox->imprimir();