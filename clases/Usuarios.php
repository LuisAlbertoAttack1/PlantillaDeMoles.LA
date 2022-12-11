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
      $sql = "INSERT INTO t_usuarios(usuario,password,fk_id_cliente)VALUES('$datos[6]','$datos[7]','$ultimo_id')";
      
      $respuesta = mysqli_query($conexion,$sql);
      return $respuesta;
    }
    
   public function logear($usuario, $password){
      try{
        $con = new Conexion();
        $conexion = $con->conectar();

        $sql = "SELECT * FROM t_usuarios WHERE usuario = '$usuario' AND password = '$password'";
        $respuesta = mysqli_query($conexion,$sql);
        $ssql = "SELECT fk_id_cliente FROM t_usuarios WHERE usuario = '$usuario' AND password = '$password'";
        $respuesta1 = mysqli_query($conexion,$ssql);
        
        //Debemos preguntar cuantos registros existen 
        $existe = mysqli_num_rows($respuesta);
        $fk_id_cliente = mysqli_fetch_array($respuesta1);
        $resp = [true, $fk_id_cliente];
        if($existe > 0){
          
          return $resp;
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
   public function consultar_pedido($fk_id_cliente){
    $c = new Conexion();
    $conexion = $c->conectar();

    $sql = "SELECT * FROM t_clientes WHERE id_cliente = '$fk_id_cliente[0]'";

            $respuesta = mysqli_query($conexion, $sql);

            return mysqli_fetch_all($respuesta, MYSQLI_ASSOC);
   }


}


?>