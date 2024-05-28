<?php

require_once "connection.php";
$connection = connection();

$nombre = "";
$correo = "";
$usuario = "";
$contraseña = "";


$sql = "SELECT * FROM register WHERE correo = ?";
$stmt = $connection->prepare($sql);
$stmt->bind_param("s", $correo);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if (!$row) {
    header("location: forgotpassword.php");
}

$destinatario = filter_var($correo, FILTER_VALIDATE_EMAIL);
$asunto = "Correo de recuperacion $nombre = {$row['nombre']} ";

$carta = "Datos a continuacion; $nombre = {$row['nombre']}; \n";
$carta .= "Correo:  $correo = {$row['correo']}; \n";
$carta .= "Mensaje: $usuario = {$row['usuario']};\n";
$carta .= "contrasena: $contraseña = {$row['contraseña']};";

mail($destinatario, $asunto, $carta);