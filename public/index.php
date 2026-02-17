<?php
// header('Content-Type: application/json;');

use app\classes\Medico;
use app\classes\Paciente;
use app\classes\Pessoa;

require '../vendor/autoload.php';


$pessoas = [
    new Pessoa ('Igor Gomes Araujo', '85111946497', 29),
    new Medico ('Dra. Marcela', '06308172430', 22, 'CRM - 05626', 'Cardiologia'),
    new Paciente ('Joselane Mateus Araujo Nunes Gomes', '50959315080', 49, 'Amil')
];

foreach ($pessoas as $pessoa) {
    echo $pessoa->apresentar() . '<br>';
}