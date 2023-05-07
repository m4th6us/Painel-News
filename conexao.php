<?php
$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';

$mysqli = new mysqli(hostname:$host, username:$usuario, password:$senha, database:$database);

if($mysqli -> error) {
    die('Falha na conexao: ' . $mysqli -> error);
} 