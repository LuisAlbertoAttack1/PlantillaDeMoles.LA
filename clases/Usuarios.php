<?php 
class Usuarios{
    //Inserta la informacion y devuelve el id con el que se inserto a la bd
    public function insertar_info_usuario($datos){
      $c = new Conexion();
      $conexion = $c->conectar();
      
      $ssql = "INSERT INTO t_clientes(nombre_cliente,apellido_paterno_cliente,apellido_materno_cliente,direccion_cliente,cp_cliente,telefono_cliente)VALUES('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]')";
      
      //print_r($ssql);
      mysqli_query($conexion,$ssql);
      $ultimo_id = $conexion->insert_id;
      
      return $ultimo_id;
    }
    //Inserta el usuario, contraseña e inserta el id recibido de insertar_info_usuario
    public function insertar_usuario($datos,$ultimo_id){
      $c = new Conexion();
      $conexion = $c->conectar();

      $sql = "INSERT INTO t_usuarios(usuario,password,fk_id_cliente)VALUES('$datos[0]','$datos[1]','$ultimo_id')";

      $resultado = mysqli_query($conexion,$sql);
      

      return $resultado;


   }
   public function logear($usuario, $password){
      try{
        $con = new Conexion();
        $conexion = $con->conectar();

        $sql = "SELECT * FROM t_usuarios WHERE usuario = '$usuario' AND password = '$password'";
        $respuesta = mysqli_query($conexion,$sql);

        //Debemos preguntar cuantos registros existen 
        $existe = mysqli_num_rows($respuesta);
        if($existe > 0){
          $_SESSION['usuario'] = $usuario;
          return true;
        }else{
          return false;
        }

      }catch(\Throwable $th){
        return $th->getMessage();
      } 

   }
   public function insertar_queja($desc_queja){
    $c = new Conexion();
    $conexion = $c->conectar();

    $sql = "INSERT INTO t_quejas(descipcion_queja)VALUES('$desc_queja')";

    $respuesta = mysqli_query($conexion,$sql);

    return $respuesta;

   }


}


?>