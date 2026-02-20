<?php

namespace app\interfaces;

use app\classes\Paciente;

interface Agendamento {
    public function agendarConsulta(Paciente $paciente, string $data, string $horario): string;
}