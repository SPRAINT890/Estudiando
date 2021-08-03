<?php
$nombre     = $_POST['nombre'];
$scnombre   = $_POST['scnombre'];
$apellido   = $_POST['apellido'];
$scapellido = $_POST['scapellido'];
$cedula     = $_POST['ci'];
$correo     = $_POST['correo'];
$contraseña = $_POST['pass'];

include('../controller/ingresarDatos.php');
if ($insert->execute($arrData)) {
    $idInsert = $con->lastInsertId();
    echo "<script> alert('Se guardo los datos correctamente');
    location.href = 'index.php';
    </script>";
}else{
    echo '<script> alert("error 404");
    location.href = registro.php";
    </script>';
}
?>