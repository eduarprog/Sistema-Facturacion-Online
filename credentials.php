<?php

require_once "connection.php";

$nombre = $_POST['nombre'];
$correo = filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
$usuario = $_POST['usuario'];
$contraseña = $_POST['$contraseña'];


$destinatario = filter_var($correo, FILTER_VALIDATE_EMAIL);
$asunto = "Correo de recuperacion $nombre";

$carta = "Datos a continuacion; De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $usuario\n";
$carta .= "contrasena: $contraseña";

mail($destinatario, $asunto, $carta);


