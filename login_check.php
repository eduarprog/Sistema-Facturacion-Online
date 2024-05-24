<?php
session_start();
require_once("connection.php");

$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];

$conection = connection();

$sql = "SELECT * FROM register WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
$resultado = $conection->query($sql);

if ($resultado->num_rows > 0) {
    $_SESSION["register"] = $usuario;
    header("Location: system.php");
} else {
    header("Location: login.php?error=1");
}
