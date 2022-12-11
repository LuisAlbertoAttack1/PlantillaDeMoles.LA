<!DOCTYPE html>
<html lang="en">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/sidebar.css">
        <link rel="stylesheet" href="../css/all.css">
        <script src="../js/all.js"></script>
        <title>Registrate</title>
</head>

<body class="ColorQuejas">
        <div class="container mt-4">
                <div class="row">
                        <div class="col">
                                <div class="card colorTransparenteCards rounded border-0">
                                        <div class="card-body" >
                                        <div class="text-center">
                                        <img src="../img/LogoDeEmpresa.png" alt="" style="width:40px; height: 40px;">
                                        </div>
                                        <h4 class="tipo-letra text-center">
                                                                                                Crear Usuario
                                                                                        </h4>
                                               <form action="../procesos/insertar_usuario.php" method="post" class="mt-4">
                                                        <div class="row">
                                                                <div class="col">
                                                                <h4 class="tipo-letra">
                                                                                                Nombre
                                                                                        </h4>
                                                                                        <input type="text"
                                                                                                name="txt_nombre"
                                                                                                class="form-control"
                                                                                                placeholder="Nombre"
                                                                                                aria-label="Username"
                                                                                                aria-describedby="basic-addon1"
                                                                                                required="">
                                                                                                <h4 class="tipo-letra mt-2">
                                                                                                Apellido Paterno</h4>
                                                                                        <input type="text"
                                                                                                name="txt_apaterno"
                                                                                                class="form-control"
                                                                                                placeholder="Apellido Paterno"
                                                                                                aria-label="Username"
                                                                                                aria-describedby="basic-addon1"
                                                                                                required="">
                                                                                                <h4 class="tipo-letra mt-2">
                                                                                                Apellido Materno</h4>
                                                                                        <input type="text"
                                                                                                name="txt_amaterno"
                                                                                                class="form-control"
                                                                                                placeholder="Apellido Materno"
                                                                                                aria-label="Username"
                                                                                                aria-describedby="basic-addon1"
                                                                                                required="">
                                                                                                <h4 class="tipo-letra mt-2">
                                                                                                Usuario</h4>
                                                                                        <input type="text"
                                                                                                name="txt_usuario"
                                                                                                class="form-control"
                                                                                                placeholder="Usuario"
                                                                                                aria-label="Username"
                                                                                                aria-describedby="basic-addon1"
                                                                                                required="">
                                                                </div>

                                                                <div class="col">
                                                                <h4 class="tipo-letra">
                                                                                                Contraseña</h4>
                                                                                        <input type="password"
                                                                                                name="txt_password"
                                                                                                class="form-control"
                                                                                                placeholder="Contraseña"
                                                                                                aria-label="Username"
                                                                                                aria-describedby="basic-addon1"
                                                                                                required="">
                                                                                                <h4 class="tipo-letra mt-2">
                                                                                                Direccion</h4>
                                                                                        <input type="text"
                                                                                                name="txt_direccion"
                                                                                                class="form-control"
                                                                                                placeholder="Direccion"
                                                                                                aria-label="Username"
                                                                                                aria-describedby="basic-addon1"
                                                                                                required="">
                                                                                                <h4 class="tipo-letra mt-2">Codigo
                                                                                                Postal</h4>
                                                                                        <input type="text"
                                                                                                name="txt_codigopostal"
                                                                                                class="form-control"
                                                                                                placeholder="Codigo Postal"
                                                                                                aria-label="Username"
                                                                                                aria-describedby="basic-addon1"
                                                                                                required="">
                                                                                                <h4 class="tipo-letra mt-2">Telefono
                                                                                                (Numero)</h4>
                                                                                        <input type="text"
                                                                                                name="txt_telefono"
                                                                                                class="form-control"
                                                                                                placeholder="Telefono"
                                                                                                aria-label="Username"
                                                                                                aria-describedby="basic-addon1"
                                                                                                required="">
                                                                </div>
                                                        </div>
                                                        <div class="d-grid gap-2 col-6 mx-auto mt-3">
                                                        <button class="btn btn-primary mb-2">Guardar
                                                                Datos</button>
                                                        <a href="../index.php" class="btn btn-danger"
                                                                type="button">Cancelar</a>
                                                </div>
                                                        
                                               </form>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>