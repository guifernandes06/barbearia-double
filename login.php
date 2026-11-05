<?php

$hn = 'localhost';
$db = 'barbearia';
$un = 'root';
$pw = '2006';

// criar ligação
$conn = new mysqli($hn, $un, $pw, $db);

// verificar ligação
if ($conn->connect_error) {
    die("Erro na ligação à base de dados: " . $conn->connect_error);
}

// definir charset (importante)
$conn->set_charset("utf8");
?>