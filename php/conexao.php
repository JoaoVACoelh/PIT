<?php
$usuario = 'root';
$senha = '';
$database = 'pit';
$host = 'localhost';
$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli->error) {
    die("Falha" . $mysqli->error);
}
