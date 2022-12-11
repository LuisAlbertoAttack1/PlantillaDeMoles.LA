<?php
    require_once "../clases/Pedidos.php";
    require_once "../db/Conexion.php";
    $desc_pedido = $_POST['txt_desc'];
    $fecha_entrega = $_POST['txt_fecha_entrega'];
    $fk_id_cliente = $_POST['txt_fk_id'];
    
    $datos = array($desc_pedido,$fecha_entrega,$fk_id_cliente);
    
    $Pedidos = new Pedido();

    //$respuesta = $Pedidos->guardar_pedido($datos);
    $respuesta = true;
    if($respuesta){
        $_SESSION['guardarPedido'] = 1;
        
    }else{
        $_SESSION['guardarPedido'] = 2;
        
    }
    print_r($_SESSION['guardarPedido']);
    header("location:../views/Views-vistaInicio.php");
    



?>