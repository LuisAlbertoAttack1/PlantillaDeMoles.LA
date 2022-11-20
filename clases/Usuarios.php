<?php 
class Usuarios{
    public function insertar_info_usuario($datos){
      $c = new Conexion();
      $conexion = $c->conectar();
      
      $ssql = "INSERT INTO t_clientes(nombre_cliente,apellido_paterno_cliente,apellido_materno_cliente,direccion_cliente,cp_cliente,telefono_cliente)VALUES('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]')";
      
      //print_r($ssql);
      mysqli_query($conexion,$ssql);
      $ultimo_id = $conexion->insert_id;
      
      return $ultimo_id;
    }
    public function insertar_usuario($datos,$ultimo_id){
      $c = new Conexion();
      $conexion = $c->conectar();

      $sql = "INSERT INTO t_usuarios(usuario,password,fk_id_cliente)VALUES('$datos[0]','$datos[1]','$ultimo_id')";

      $resultado = mysqli_query($conexion,$sql);
      

      return $resultado;


   }

}


?>