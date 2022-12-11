<?php
session_start();
require_once "../db/Conexion.php";
require_once "../clases/Pedidos.php";
$id_cliente = $_SESSION['pedido'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../node_modules/sweetalert2/dist/sweetalert2.min.css">
    <title>Pedidos</title>
  </head>
  <body>
    <h1>Relizar pedido</h1>
    <?php include "../views/menu.php";?>
    <div class="container">
        <div class="row">
            <div class="col mt-4">
                <form action="../procesos/insertar_pedido.php" method="post">
                    <div class="input-group">
                        <span class="input-group-text">Descripcion de pedido</span>
                        <textarea class="form-control" aria-label="With textarea" name="txt_desc"></textarea>
                    </div>
                    <div class="input-group">
                    <span class="input-group-text">Fecha de entrega del pedido</span>
                        <input type="date" name="txt_fecha_entrega">
                    </div>
                    <input type="text" value="<?php echo $id_cliente['fk_id_cliente']; ?>" name="txt_fk_id" hidden>
                        <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary mb-2">Guardar Datos</button>
                        </div> 
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <?php 
if (isset($_SESSION['guardarPedido']) == 1) {
    echo "<script>
            Swal.fire({
              icon: 'success',
              title: 'God job!',
              text: 'Operación exitosa, pedido guardado.',  
              })
             
    </script>"; 
    //unset($_SESSION['guardarPedido']);
}
if(isset($_SESSION['guardarPedido']) == 2){
    echo "<script>
    Swal.fire({
    icon: 'error',
    title: 'Oops...!',
    text: 'Pedido rechazado.',  
    })
    </script>";
    //unset($_SESSION['guardarPedido']);
}
?>
  </body>
</html>
