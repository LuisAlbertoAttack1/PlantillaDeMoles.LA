<?php
session_start();
require_once "../db/Conexion.php";
require_once "../clases/Usuarios.php";

$Usuarios = new Usuarios();

$usuario = $_POST['txt_usuario'];
$password = sha1($_POST['txt_password']);

$respuesta = $Usuarios->logear($usuario,$password);

if($respuesta){
    header("location:../views/Views-vistaInicio.php");
}else{
    echo "<script>
    alert('Los datos son incorrectos')
</script>";
header("location:../index.php");
}

?>