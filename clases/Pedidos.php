<?php 
    class Pedido{
        public function guardar_pedido($datos){
            $c = new Conexion();
            $conexion = $c->conectar();

            $sql = "INSERT INTO t_pedidos(descripcion_pedido,fecha_entrega_pedido,fk_id_cliente)VALUES('$datos[0]','$datos[1]','$datos[2]')";

            $respuesta = mysqli_query($conexion,$sql);

            return $respuesta;
        }
    }
?>