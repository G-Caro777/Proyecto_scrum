<nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
        <a class="navbar-brand" href="#">Tienda</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="iniciar sesion.php">Registrase <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                Opciones
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="index.php">Inicio</a>
                <a class="dropdown-item" href="consultarDatos.php">Consultar</a>
                <a class="dropdown-item" href="registrarDatos.php">Registrar Prendas</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Mujer.php">Mujer</a>
                <a class="dropdown-item" href="Hombres.php">Hombre</a>
                <a class="dropdown-item" href="Accesorios.php">Accersorios</a>
                <a class="dropdown-item" href="Intercambio.php">Intercambio</a>
              </div>
            </li>
          </ul>
  
          <form class="form-inline my-2 my-lg-0" method="GET" action="resultadoBusqueda.php">
            <input name="termino" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-light" type="submit">Buscar</button>
          </form>
        </div>
    </nav><br>