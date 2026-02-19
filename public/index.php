<?php
// header('Content-Type: application/json;');

use app\classes\Medico;
use app\classes\Paciente;
use app\classes\Recepcionista;

require '../vendor/autoload.php';

$medico = new Medico('Dra. Marcela', '06308172430', 22, '05626 - CRMDF', 'Cardiologia');
$recep = new Recepcionista('Lane Nunes', '08105317044', 49, 'Recepção Geral');
$paciente = new Paciente ('Igor Gomes Araujo', '50959315080', 29, 'SulAmerica');


$agendas = [$medico, $recep];

foreach ($agendas as $agenda) {
    echo $agenda->agendarConsulta($paciente, "2026-02-22", "15:00") . "<br>";
}
