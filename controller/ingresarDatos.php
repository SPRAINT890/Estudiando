<?php
include('../controller/conexion.php');
$con = new Conexion();
$sql = "INSERT INTO persona (
    cedula, 
    primerNombre, 
    segundoNombre, 
    primerApellido, 
    segundoApellido,
    contrasena,
    correo
    ) VALUES (?,?,?,?,?,?,?)";

$insert = $con->prepare($sql);
$arrData = array($cedula, $nombre, $scnombre, $apellido, $scapellido, $contraseña, $correo);
