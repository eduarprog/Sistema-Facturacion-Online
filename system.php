<?php
session_start();
if (isset($_SESSION["usuario"])) {
  header("Location: system.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - System Inventory</title>
    <script src="https://kit.fontawesome.com/f97fcd2c02.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<?php
require_once('connection.php');
if (isset($_SESSION["register"])) {
    $usuario = $_SESSION["register"];

    $connection = connection(); // Establecer la conexión

    $sql = "SELECT nombre FROM register WHERE usuario = '$usuario'";
    $resultado = $connection->query($sql);

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();
        $nombre = $usuario["nombre"];
    } else {
        // Si no se encuentra el usuario en la base de datos, maneja el error adecuadamente
        $nombre = "Nombre no encontrado";
    }
} else {
    // Si no hay sesión iniciada, redirigir al login
    header("Location: login.php");
    exit();
}
?>
<body>
<nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand"   href="system.php">System Inventory</a>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 title="Usuario conectado" class="offcanvas-title" id="offcanvasNavbarLabel"><i class="fa-solid fa-user" style="color: #63E6BE;"></i>&nbsp;</i><?php echo $nombre ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-table-cells-large" style="color: #ffd43b;"></i>&nbsp;&nbsp;Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="clients.php"><i class="fa-solid fa-pen-to-square" style="color: #24f948;"></i>&nbsp;&nbsp;Facturacion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="clients.php"><i class="fa-regular fa-address-book" style="color: #153af4;"></i>&nbsp;&nbsp;Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="clients.php"><i class="fa-solid fa-chart-simple" style="color: #f00f0f;"></i>&nbsp;&nbsp;Reportes</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-layer-group"></i>&nbsp;Productos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Compras</a></li>
              <li><a class="dropdown-item" href="#">Salidas</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
       <!-- <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>-->
      </div>
      <li class="nav justify-content-end">
        <a style="text-decoration: none;" href="logout.php" aria-label="Close" title="Salir"><i class="fa-solid fa-arrow-right-from-bracket fa-lg" style="color: #e40c0c;"></i>&nbsp;</a>
        </li>
    </div>
    
  </div>
  
</nav>
<div class="container" style="margin: 90px; " >
  <ul class="nav nav-tabs " id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Facturación</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Facturación con comprobante</button>
    </li>
  </ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
    <form>
      <label></label>
      <br>
      <input>
    </form>
  </div>
  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
</div>
</div>
</body>
</html>