<?php
session_start();
require_once("connection.php");

$correo = $_POST["correo"];

$connection = connection();

$sql = "SELECT * FROM register WHERE correo = '$correo'";
$resultado = $connection->query($sql);

if ($resultado->num_rows > 0) {
    $_SESSION["register"] = $correo;
    header("Location: forgotpassword.php?success=1");
} else {
    header("Location: forgotpassword.php?error=1");
}
