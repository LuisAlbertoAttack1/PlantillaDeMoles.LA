<?php

session_start();  
require_once "../db/Conexion.php";
require_once "../clases/Usuarios.php";

$Usuarios = new Usuarios();
$id_cliente = $_SESSION['cliente'];
$datos = $Usuarios->consultar_pedido($id_cliente);

$_SESSION['pedido'] = $id_cliente;

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.2/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.2/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/sweetalert2/dist/sweetalert2.min.css">
    <title>Dashboard</title>
  </head>
  <body>

  <?php include "../views/menu.php";?>
  
  <div class="container">
        <div class="row">
            <div class="col">
                <table id="example" class="table table-striped table-bordered nowrap mt-4" style="width:100%">
                    <thead>
                        <th hidden>Id cliente</th>
                        <th>Nombre</th>
                        <th>apellido paterno</th>
                        <th>apellido materno</th>
                        <th>direccion</th>
                        
                    </thead>
                    <tbody>
                        <?php foreach ($datos as $item) : ?>
                            <tr>
                                <td hidden><?php echo $item['id_cliente']; ?></td>
                                <td><?php echo $item['nombre_cliente']; ?></td>
                                <td><?php echo $item['apellido_paterno_cliente']; ?></td>
                                <td><?php echo $item['apellido_materno_cliente']; ?></td>
                                <td><?php echo $item['direccion_cliente']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

  

        <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.2/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js"></script>
    
    <script src="../js/app.js"></script>
<script src="../node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <?php 
if (isset($_SESSION['guardarPedidog']) == 1) {
    echo "<script>
            Swal.fire({
              icon: 'success',
              title: 'God job!',
              text: 'Operación exitosa, pedido guardado.',  
              })
             
    </script>"; 
    unset($_SESSION['guardarPedidog']);
}else{
}
if(isset($_SESSION['guardarPedidoe']) == 1){
    echo "<script>
    Swal.fire({
    icon: 'error',
    title: 'Oops...!',
    text: 'Pedido rechazado.',  
    })
    </script>";
    unset($_SESSION['guardarPedidoe']);
}else{
}
?>
  </body>
</html>
