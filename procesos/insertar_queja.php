<?php
require_once "../clases/Usuarios.php";
require_once "../db/Conexion.php";
$queja_descripcion = $_POST['txt_queja'];

$queja = new Usuarios();

if($queja->insertar_queja($queja_descripcion)){
    header("location:../index.php");
}

?>