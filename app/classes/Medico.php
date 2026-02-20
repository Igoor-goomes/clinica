<?php
namespace app\classes;

use app\interfaces\Agendamento;
use app\interfaces\Cancelamento;
use app\interfaces\Reagendamento;

class Medico extends Pessoa implements Agendamento, Reagendamento, Cancelamento
{
    public function __construct(
        string $nome, 
        string $cpf, 
        int $idade,
        private readonly string $crm,
        private readonly string $especialidade
    )
    {
        parent::__construct($nome, $cpf, $idade);
    }

    public function getCrm(): string {return $this->crm;}
    public function getEspecialidade(): string {return $this->especialidade;}

    public function apresentar(): string
    {
        return "Medico:{$this->getNome()} | CRM: {$this->crm} | Especialidade: {$this->especialidade}";
    }

    public function agendarConsulta(Paciente $paciente, string $data, string $horario): string
    {
        return "Consulta agendada por médico(a) para o Paciente {$paciente->getNome()} no dia {$data} ás {$horario} com o Médico(a): {$this->getNome()}, Especialidade: {$this->getEspecialidade()}";
    }

    public function reagendarConsulta(Paciente $paciente, string $novaData, string $novoHorario): string
    {
        return "Consulta reagendada pelo médico(a) para o Paciente {$paciente->getNome()} no dia {$novaData} ás {$novoHorario} com o Médico(a): {$this->getNome()}, Especialidade: {$this->getEspecialidade()}";
    }

    public function cancelarConsulta(int $id_agendamento): string
    {
        return "Consulta cancelada!";
    }

}