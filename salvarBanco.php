<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once 'Medoo.php';

use Medoo\Medoo;

$nome = $_POST['nome_completo'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];

// Connect the database.
$database = new Medoo([
    'type' => 'mysql',
    'database_name' => 'formulario',
    'server' => 'localhost',
    'username' => 'root',
    'password' => 'root'
]);

$database->insert('formulario', [
    'nome_completo' => $nome,
    'idade' => $idade,
    'sexo' => $sexo,
]);

// var_dump($_GET);
// var_dump($_POST);
echo json_encode([
    'sucesso' => true,
    'mensagem' => 'Agora salvei com sucesso de novo!',
    'dados_enviados' => $_POST
]);
