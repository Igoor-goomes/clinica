<?php 

namespace app\interfaces;

use app\classes\Paciente;

interface Reagendamento {
    public function reagendarConsulta(Paciente $paciente, string $novaData, string $novoHorario): string;
}