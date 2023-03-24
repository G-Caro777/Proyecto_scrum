<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <?php include 'menu.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrar Prendas</h1><hr>
                <form method="post" action="guardarDatos.php">
                    <div class="form-group">
                        <label for="">Imagen:</label>
                        <input type="text" class="form-control" name="nombre" placeholder=".....">
                    </div>

                    <div class="form-group">
                        <label for="">Precio:</label>
                        <input type="number" class="form-control" name="precio" placeholder="Teclea el precio">
                    </div>

                    <div>
                        <input type="submit" class="btn btn-secondary" value="Registrar">
                        <a href="consultarDatos.php" class="btn btn-primary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; Tienda
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>
