<?php
namespace app\classes;

abstract class Pessoa 
{
    // Atributos - que descrevem o estado do paciente | no PHP 8+ podemos passar os atributos e usar o método especial __construct de forma mais elegante    
    public function __construct(
        private readonly string $nome,
        private readonly string $cpf,
        private          int    $idade,
    ) {
        $this->validaCpf($cpf);
        $this->setIdade($idade);
    }

    // Métodos setters 
    public function setIdade(int $idade): void
    {
        if ($idade <= 0) {
            throw new \InvalidArgumentException("Idade inválida: {$idade}. Deve ser maior que zero!");
        }
        $this->idade = $idade;
    }

    protected function validaCpf(string $cpf): void
    {
        $cpfLimpo = preg_replace('/\D/', '', $cpf);
        if (strlen($cpfLimpo) !== 11) {
            throw new \InvalidArgumentException("CPF inválido: {$cpf}.");
        }
    }

    // Métodos getters
    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    // Vai forçar as classes filhas a implemetarem esse método abstrato
    abstract public function apresentar(): string;
}