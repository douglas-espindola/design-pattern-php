<?php

    use DesignPatterns\Comportamentais\Observer\Cliente;
    use DesignPatterns\Comportamentais\Observer\Fornecedor;
    use DesignPatterns\Comportamentais\Observer\Funcionario;
    use DesignPatterns\Comportamentais\Observer\Newsletter;
    use DesignPatterns\Comportamentais\Observer\Parceiro;

    require_once __DIR__ . '/../../vendor/autoload.php';

    $newsletter = new Newsletter();

    $funcionario1 = new Funcionario(
        'Funcionario 1',
        'funcionario@email.com',
        $newsletter
    );

    $funcionario2 = new Funcionario(
        'Funcionario 2',
        'funcionario2@email.com',
        $newsletter
    );

    $cliente = new Cliente(
        'cliente',
        'cliente@email.com',
        $newsletter
    );

    $parceiro = new Parceiro(
        'parceiro',
        'parceiro@email.com',
        $newsletter
    );

    $fornecedor = new Fornecedor(
        'fornecedor',
        'fornecedor@email.com',
        $newsletter
    );

    $newsletter->addMensagem('Primeira Mensagem');
    echo '#############<br><br>';


    $newsletter->removeObserver($funcionario2);
    $newsletter->addMensagem('Segunda Mensagem');
    echo '#############<br><br>';

    $newsletter->addMensagem('Terceira Mensagem');
    echo '#############<br><br>';


