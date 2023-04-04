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

$database->insert('formulario', [
    'nome_completo' => $_POST['nome_completo'],
    'idade' => $_POST['idade'],
    'sexo' => 'masculino',
]);

// var_dump($_GET);
// var_dump($_POST);
echo json_encode([
    'sucesso' => true,
    'mensagem' => 'Agora salvei com sucesso de novo!',
    'dados_enviados' => $_POST
]);
