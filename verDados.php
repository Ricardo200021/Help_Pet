<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once 'Medoo.php';

use Medoo\Medoo;

// Connect the database.
$database = new Medoo([
    'type' => 'mysql',
    'database_name' => 'formulario',
    'server' => 'localhost',
    'username' => 'cadastro',
    'password' => ' '
]);

$data = $database->select('formulario', [
    'nome_completo',
    'idade',
    'sexo'
], [
    'sexo' => 'masculino'
]);

var_dump($data);
