<?php
class ConstrutorBusca
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selecioneTodos($tabela)
    {
        $busca = $this->pdo->prepare("select * from {$tabela} ");

        $busca->execute();

        return $busca->fetchAll(PDO::FETCH_CLASS);
    }
}