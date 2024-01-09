<?php

namespace DesignPatterns\Criacionais\Singleton;

class MySql implements Conexao
{
    private string $host;
    private string $user;
    private string $password;

    public function __construct()
    {
        $this->host = 'mysql:host=localhost;dbname=bancoDeDados';
        $this->user = 'pedrosilva';
        $this->password = 'pedro123';
    }

    public static function executeQuery(string $query): ?array
    {
        echo "A query: <br>'" . $query . "'<br>foi executada com sucesso<br><br>";
        return null;
    }

    public function setHost(string $host): void
    {
        $this->host = $host;
    }

    public function setUser(string $user): void
    {
        $this->user = $user;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function __toString(): string
    {
        $saida['host'] = $this->host;
        $saida['user'] = $this->user;
        $saida['password'] = $this->password;

        return json_encode($saida);
    }
}
