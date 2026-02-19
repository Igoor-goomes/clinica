<?php
namespace app\interfaces;

use app\classes\Paciente;

interface Agenda {
    // somente assinaturas sem o uso de atributos
    public function agendarConsulta(Paciente $paciente, string $data, string $horario): string;
    // public function cancelarConsulta(int $agendamentoId): int;
    // public function reeagendarConsulta(int $agendamentoId, string $novaData): string;


}