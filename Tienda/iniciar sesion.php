<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iniciar sesión</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <?php include 'menu.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h1>Registarse </h1><hr>
                <form method="post">

                <div class="form-group">
                        <label for="">Correo electrónico:</label>
                        <input type="text" class="form-control" name="correo" placeholder="Teclea el correo">
                    </div>

                    <div class="form-group">
                        <label for="">Contraseña:</label>
                        <input type="text" class="form-control" name="contraseña" placeholder="Teclea la contraseña">
                    </div>

                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Teclea el nombre">
                    </div>

                    <div class="form-group">
                        <label for="">Apellidos:</label>
                        <input type="text" class="form-control" name="apellidos" placeholder="Teclea los apellidos">
                    </div>

                    <div class="form-group">
                        <label for="">Edad:</label>
                        <input type="number" class="form-control" name="edad" placeholder="Teclea la edad">
                    </div><br>
                    
                    <div class="col-12">
                    <a href="registro.php" class="btn btn-primary">Continuar</a>
                         </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</form>
<footer class="text-center">
        <hr>
        2022 &copy; Jugueteria
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>