<?php
$servername = "localhost"; 
$usuario = "root"; 
$pass = ""; 
$db = "olimpo"; 

$cnn = new mysqli($servername, $usuario, $pass, $db);

if ($cnn->connect_error) {
    die("Conexión fallida: " . $cnn->connect_error);
}
?>
