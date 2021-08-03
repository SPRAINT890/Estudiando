<?php
$correo     = $_POST['correo'];
$contraseña = $_POST['pass'];
include('../controller/validarDatos.php');
if ($insert->execute($arrData)) {
  $idInsert = $con->lastInsertId();
  echo "<script> alert('Datos validados exitosamente');
    location.href = 'inicio.php';
    </script>";
}else {
  echo "<script> alert('Cuenta no existente');
    location.href = 'index.php';
    </script>";
}