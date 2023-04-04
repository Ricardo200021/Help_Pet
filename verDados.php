<?php

require_once __DIR__ . '/vendor/autoload.php';

use Medoo\Medoo;
 
// Connect the database.
$database = new Medoo([
    'type' => 'mysql',
    'host' => 'database',
    'database' => 'formulario',
    'username' => 'root',
    'password' => 'docker'
]);

$data = $database->select('formulario', [
    'nome_completo',
    'idade',
    'sexo'
], [
    'sexo' => 'masculino'
]);

var_dump($data);