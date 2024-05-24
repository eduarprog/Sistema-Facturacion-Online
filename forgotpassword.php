



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f97fcd2c02.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Password recovery | System Inventory</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="login_check.php" method="post" >
        <h3>Password recovery</h3>
        <label class="form-label"><b>Correo</b></label>
        <br>
        <input class="form-label" placeholder="Escriba su correo" required name="correo" id="user">
        <br>
        <button action="credentials.php" >Enviar</button>
        <br>
        <br>
        <a href="register.php">Volver al login</a>
    </form>
</body>
</html>