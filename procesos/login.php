<?php
session_start();
require_once "../db/Conexion.php";
require_once "../clases/Usuarios.php";

$Usuarios = new Usuarios();

$usuario = $_POST['txt_usuario'];
$password = sha1($_POST['txt_password']);


$respuesta = $Usuarios->logear($usuario,$password);
if($respuesta[0]){
    $_SESSION['usuario'] = $usuario;
    $_SESSION['cliente'] = $respuesta[1];
    header("location:../views/Views-vistaInicio.php");
}else{
    $_SESSION['sesion'] = 1;
    header("location:../index.php");
}

?>