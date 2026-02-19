<?php
namespace app\classes;

use app\interfaces\Agenda;
class Medico extends Pessoa implements Agenda
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
        return "Consulta agenda com Dr(a): {$this->getNome()}, para o paciente {$paciente->getNome()} em {$data} ás {$horario}";
    }

}