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
$password = sha1($_POST['txt_password']);


/**Guardar todos los datos en su respectivo arreglo*/
$datos_cliente = array($nombre, $apellido_paterno,$apellido_materno,$direccion,$codigo_postal,$telefono,$usuario,$password);


/**Instancia de obj para acceder a la clase Usuarios */
$obj = new Usuarios();
/**Guardar lo que nos devuelve el commit de la db(t_clientes) */
$resp = $obj->insertar_info_usuario($datos_cliente);

        //Verifica que haga el segundo commit (t_usuarios) y regresa a la pagina principal     
        if($resp){
            header('location:../index.php');
    
        }
?>