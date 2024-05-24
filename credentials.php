<?php

require_once "connection.php";

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['$contraseña'];


$destinatario = $correo;
$asunto = "Prueba";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $usuario\n";
$carta .= "contrasena: $contraseña";

mail($destinatario, $asunto, $carta);


