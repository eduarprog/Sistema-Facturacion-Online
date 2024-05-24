<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f97fcd2c02.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>LOGIN | System Inventory</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="login_check.php" method="post" >
    <?php if (isset($_GET["error"])) {
            echo "<p>Usuario o contraseña incorrectos. Inténtalo de nuevo por favor.</p>";
          } ?>
        <h3>LOGIN</h3>
        <label><b>Usuario</b></label>
        <br>
        <input required name="usuario" id="user">
        <br>
        <label><b>Contraseña</b></label>
        <br>
        <input type="password" required name="contraseña" id="contraseña">
        <br>
        <br>
        <button type="submit" title="Accede" >Ingresar</button>
        <br>
        <br>
        <a href="register.php">¿No tienes cuenta?<br>¡Registrate aqui!</a>
    </form>
    <a href="forgotpassword.php">Olvide mi contraseña..</a>
</body>
</html>