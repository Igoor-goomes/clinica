<?php
// header('Content-Type: application/json;');

use app\classes\Medico;
use app\classes\Paciente;
use app\classes\Recepcionista;

require '../vendor/autoload.php';


$pessoas = [
    new Medico ('Dra. Marcela', '06308172430', 22, '05626 - CRMDF', 'Cardiologia'),
    new Paciente ('Igor Gomes Araujo', '50959315080', 29, 'SulAmerica'),
    new Recepcionista('Lane Nunes', '08105317044', 49, 'Recepção Geral')
];

foreach ($pessoas as $pessoa) {
    echo $pessoa->apresentar() . '<br>';
}
