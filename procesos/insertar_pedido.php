<?php
    session_start();
    require_once "../clases/Pedidos.php";
    require_once "../db/Conexion.php";
    $desc_pedido = $_POST['txt_desc'];
    $fecha_entrega = $_POST['txt_fecha_entrega'];
    $fk_id_cliente = $_POST['txt_fk_id'];
    
    $datos = array($desc_pedido,$fecha_entrega,$fk_id_cliente);
    
    $Pedidos = new Pedido();

    $respuesta = $Pedidos->guardar_pedido($datos);
    
    if($respuesta){
        $_SESSION['guardarPedidog'] = 1;
        
    }else{
        $_SESSION['guardarPedidoe'] = 1;
        
    }
    header("location:../views/Views-vistaInicio.php");
    



?>