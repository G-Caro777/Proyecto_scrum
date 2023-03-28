<?php

include 'conexion.php';

$id = $_GET["id"];

$sql = "DELETE FROM productos WHERE id =" . $id;

if($conexion->query($sql) === TRUE){
    echo "Se elimino el registro con ID ".$id."<br>";
    echo "<a href='consultarDatos.php'> Regresar </a>";
} else {
    echo "Ocurrio un error: ".$conexion->erorr."<br>";
    echo "<a href='consultarDatos.php'> Regresar </a>";
}

?>