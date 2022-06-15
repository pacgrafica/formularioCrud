<?php
include ("con_db.php");

$id = $_POST['id'];
$name = $_POST['nombre'];
$email = $_POST['email'];

//Actualizar datos
$actualizar = "UPDATE datos SET nombre='$name', email='$email', WHERE id='$id'";

$resultado=mysqli_query($conex, $actualizar);

if ($resultado) {
    echo "<script>alert('Se han actualizado los cambios correctamente, actualice la pagina para ver los cambios'); window.location='editar.php';</script>";
}   else {
        echo "<script>alert('No se pudo actualizar los datos'); windows.history.go(-1);</script>";
}
?>