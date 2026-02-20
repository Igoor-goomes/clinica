<?php

namespace app\interfaces;

interface Cancelamento {
    public function cancelarConsulta(int $id_agendamento): string;
}