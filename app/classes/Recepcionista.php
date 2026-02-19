<?php
namespace app\classes;

use app\interfaces\Agenda;

class Recepcionista extends Pessoa implements Agenda
{

    public function __construct(
        string $nome, 
        string $cpf, 
        int $idade,
        private string $setor
    )
    {
        parent::__construct($nome, $cpf, $idade);
    }

    public function getSetor(): string {return $this->setor;}

    public function apresentar(): string
    {
        return "Nome: {$this->getNome()} | Setor: {$this->setor}";
    }

    public function agendarConsulta(Paciente $paciente, string $data, string $horario): string
    {
        return "Consulta agendada por {$this->getNome()}, para o paciente {$paciente->getNome()} no dia {$data} ás {$horario}";
    }
}