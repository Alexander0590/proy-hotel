<?php
session_start();
include('../conecxion/conecxion.php'); 

// Obtener los datos del formulario
$usuario = $_POST['usuario'];
$contraseña = $_POST['clave'];

// Consulta preparada para evitar SQL Injection
$sql = "SELECT * FROM usuarios WHERE usuario = ?";
$stmt = $cnn->prepare($sql);

// Vincular los parámetros
$stmt->bind_param("s", $usuario);

// Ejecutar la consulta
$stmt->execute();
$result = $stmt->get_result();

// Verificar si existe el usuario
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    if ($contraseña === $row['password']) {
        // Contraseña correcta
        session_start();
        $_SESSION['dato'] = $row['datos'];
        $_SESSION['rol'] = $row['rol'];
        $_SESSION['tel'] = $row['telefono'];
        $_SESSION['usuario'] = $row['usuario'];
    
        header("Location: ../panel.php");
        exit();
    } else {
        // Contraseña incorrecta
        $dato = "Usuario o Contraseña Incorrectos";
        header("Location: ../login.php?dato=" . urlencode($dato));
        exit();
    }
}


// Cerrar la conexión
$stmt->close();
$cnn->close();
?>
