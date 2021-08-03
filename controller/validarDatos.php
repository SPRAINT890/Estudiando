<?php
include('../controller/conexion.php');
$con = new Conexion();
$sql = "SELECT correo, contrasena FROM persona WHERE correo=? AND contrasena=?;";
$insert = $con->prepare($sql);
$arrData = array($correo, $contraseña);