<?php
namespace app\classes;

// use app\classes\Pessoa; -> verificar se é obrigatório importar o use da classe pai

class Medico extends Pessoa
{
    public function __construct(
        string $nome, 
        string $cpf, 
        int $idade,
        private readonly string $crm,
        private readonly string $especialidade
    )
    {
        return parent::__construct($nome, $cpf, $idade);
    }

    public function getCrm(): string {return $this->crm;}
    public function getEspecialidade(): string {return $this->especialidade;}

    public function apresentar(): string
    {
        return "Medico:{$this->getNome()} | CRM: {$this->crm} | Especialidade: {$this->especialidade}";
    }

}