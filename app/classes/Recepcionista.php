<?php
namespace app\classes;

use app\interfaces\Agendamento;
use app\interfaces\Reagendamento;

class Recepcionista extends Pessoa implements Agendamento, Reagendamento
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
        return "Consulta agendada pela recepção para o Paciente {$paciente->getNome()} no dia {$data} ás {$horario}";
    }   

    public function reagendarConsulta(Paciente $paciente, string $novaData, string $novoHorario): string
    {
        return "Consulta reagendada, para o Paciente: {$paciente->getNome()} no dia {$novaData} ás {$novoHorario}";
    }
}