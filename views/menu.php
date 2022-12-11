
    <nav class="navbar navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="./Views-vistaInicio.php"><img src="../img/LogoDeEmpresa.png" width="50rem" height="50rem"><?php echo "Bienvenido ".$_SESSION['usuario'];?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Opciones</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../views/Views-vistaInicio.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Realizar pedido</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../procesos/cerrar_sesion.php">Cerrar Sesion</a>
          </li>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
