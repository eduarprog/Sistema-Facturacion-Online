<?php

require 'connection.php';
$connection = connection();

$nombre = "";
$correo = "";
$usuario = "";
$contraseña = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
 
    $sql = "INSERT INTO register (nombre, correo, usuario, contraseña)" .
        "VALUES ('$nombre', '$correo', '$usuario', '$contraseña')";
    $result = $connection->query($sql);


    header("location: register.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f97fcd2c02.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>REGISTER | System Inventory</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form method="post" >
        <h3>REGISTER</h3>
        <label class="form-label">Nombre</label>
        <br>
        <input class="form-label" required name="nombre" value="<?php echo $nombre ?>" >
        <br>
        <label class="form-label">Correo</label>
        <br>
        <input type="email" class="form-label" required name="correo" value="<?php echo $correo ?>" >
        <br>
        <label class="form-label">Usuario</label>
        <br>
        <input class="form-label" required name="usuario" value="<?php echo $usuario ?>">
        <br>
        <label class="form-label">Contraseña</label>
        <br>
        <input class="form-label" id="contra1" required name="contraseña" value="<?php echo $contraseña ?>">
        <br>
        <div id="error-message" style="display:none"></div>
        <label class="form-label">Escribe la Contraseña nuevamente</label>
        <br>
        <input class="form-label" id="contra2" required >
        <br>
        <a href="login.php">Ir a pagina de inicio de sesion</a>
        <button type="submit">Guardar</button>
    </form>
    <script>
    document.querySelector('form').addEventListener('submit', function(event) {
        event.preventDefault();

        var contra1Value = document.getElementById('contra1').value;
        var contra2Value = document.getElementById('contra2').value;

            if (contra1Value !== contra2Value) {
            var errorMessageElement = document.getElementById('error-message');
            errorMessageElement.textContent = 'Los textos en los dos inputs no son iguales. Por favor, asegúrate de que coincidan.';
            errorMessageElement.style.display = 'block';
        } else {
            this.submit();
        }
    });
</script>

</body>
</html>