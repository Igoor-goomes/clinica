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
    echo $agenda->agendarConsulta($paciente, "22/02/2026", "15:00") . "<br>";
}

echo '<br>';
echo '<hr>';
echo $recep->reagendarConsulta($paciente, '25/02/2026', '13:30');
echo '<br>';
echo '<hr>';
echo $medico->reagendarConsulta($paciente, '01/03/2026', '11:00');