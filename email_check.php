<?php
session_start();
require_once("connection.php");
require_once("credentials.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = filter_var($_POST["correo"], FILTER_SANITIZE_EMAIL);

    if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $connection = connection();

$sql = "SELECT * FROM register WHERE correo = '$correo'";
$stmt = $connection->prepare("SELECT * FROM register WHERE correo = ?");
$stmt->bind_param("s", $correo);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    $_SESSION["register"] = $correo;
    header("Location: credentials.php");
   } else {
    header("Location: forgotpassword.php?error=1");
   }
        $stmt->close();
        $connection->close();

    }
}

