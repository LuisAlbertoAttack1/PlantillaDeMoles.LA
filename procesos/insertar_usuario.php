<?php
/**Abrir conexion a la base*/
require_once "../db/Conexion.php";
require_once "../clases/Usuarios.php";

/**Cachar datos del formulario*/
$nombre = $_POST['txt_nombre'];
$apellido_paterno = $_POST['txt_apaterno'];
$apellido_materno = $_POST['txt_amaterno'];
$direccion = $_POST['txt_direccion'];
$codigo_postal = $_POST['txt_codigopostal'];
$telefono = $_POST['txt_telefono'];
$usuario = $_POST['txt_usuario'];
$password = $_POST['txt_password'];
/*print_r($_POST);
echo "<br>";*/

$datos_cliente = array($nombre, $apellido_paterno,$apellido_materno,$direccion,$codigo_postal,$telefono);
$datos_usuario = array($usuario, $password);

/***Abrir conexion para consultar el ultimo id ingresado*/
$obj = new Usuarios();
$resp = $obj->insertar_info_usuario($datos_cliente);

    
        if($obj->insertar_usuario($datos_usuario,$resp)){
            header('location:../index.php');
    
}
?>