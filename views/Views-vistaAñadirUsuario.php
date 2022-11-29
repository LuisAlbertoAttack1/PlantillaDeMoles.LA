<!doctype html>
<html lang="en">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
                crossorigin="anonymous">
        <link rel="stylesheet" href="../css/sidebar.css">
        <link rel="stylesheet" href="../css/all.css">
        <script src="../js/all.js"></script>
        <title>Registrate</title>
</head>

<body class="fondoColorLoginCreacionDeUser">
        <div class="container-fluid">
                <div class="row">
                        <div class="col">
                                <div class="card mt-4 position-absolute
                                                top-50 start-50 translate-middle
                                                tamañocardsdos">
                                        <div class="card-body">
                                                <!------------------------->
                                                <div class="row
                                                                row-cols-1
                                                                row-cols-md-2
                                                                g-4">
                                                        <div class="col">
                                                                <div class="card
                                                                                border-0">
                                                                        <div class="text-center">
                                                                                <img src="../img/LogoDeEmpresa.png"
                                                                                        class="tamañoDeLogoLogin"
                                                                                        alt="...">
                                                                        </div>
                                                                        <div class="card-body">
                                                                        </div>
                                                                </div>
                                                        </div>

                                                        <div class="col">

                                                                <div class="card
                                                                                border-0">
                                                                        <div class="card-body">
                                                                                <div class="text-center">
                                                                                        <img src="../img/LogoDeEmpresa.png"
                                                                                                class="tamaño-logo-dos
                                                                                                        mt-4
                                                                                                        mb-4" alt=""
                                                                                                srcset="">
                                                                                </div>
                                                                                <h1 class="text-center
                                                                                                tipo-letra">Moles
                                                                                        Tradicionales
                                                                                        Rios</h1>

                                                                        </div>
                                                                </div>
                                                        </div>

                                                        <form action="../procesos/insertar_usuario.php" method="post">
                                                                <div class="col">
                                                                        <div class="card
                                                                                border-0">
                                                                                <div class="card-body">
                                                                                        <h4 class="tipo-letra">
                                                                                                Nombre
                                                                                        </h4>
                                                                                        <input type="text"
                                                                                                name="txt_nombre"
                                                                                                class="form-control"
                                                                                                placeholder="Username"
                                                                                                aria-label="Username"
                                                                                                aria-describedby="basic-addon1">
                                                                                        <br>

                                                                                        <h4 class="tipo-letra">
                                                                                                Apellido Paterno</h4>
                                                                                        <input type="text"
                                                                                                name="txt_apaterno"
                                                                                                class="form-control"
                                                                                                placeholder="Username"
                                                                                                aria-label="Username"
                                                                                                aria-describedby="basic-addon1">
                                                                                        <br>
                                                                                        <!--------->
                                                                                        <h4 class="tipo-letra">
                                                                                                Apellido Materno</h4>
                                                                                        <input type="text"
                                                                                                name="txt_amaterno"
                                                                                                class="form-control"
                                                                                                placeholder="Username"
                                                                                                aria-label="Username"
                                                                                                aria-describedby="basic-addon1">
                                                                                        <br>
                                                                                        <h4 class="tipo-letra">
                                                                                                Usuario</h4>
                                                                                        <input type="text"
                                                                                                name="txt_usuario"
                                                                                                class="form-control"
                                                                                                placeholder="Username"
                                                                                                aria-label="Username"
                                                                                                aria-describedby="basic-addon1">
                                                                                        <br>
                                                                                        <h4 class="tipo-letra">
                                                                                                Contraseña</h4>
                                                                                        <input type="password"
                                                                                                name="txt_password"
                                                                                                class="form-control"
                                                                                                placeholder="Username"
                                                                                                aria-label="Username"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <div class="col">
                                                                        <div class="card
                                                                                border-0">
                                                                                <div class="card-body">
                                                                                        <h4 class="tipo-letra">
                                                                                                Direccion</h4>
                                                                                        <input type="text"
                                                                                                name="txt_direccion"
                                                                                                class="form-control"
                                                                                                placeholder="Username"
                                                                                                aria-label="Username"
                                                                                                aria-describedby="basic-addon1">
                                                                                        <br>
                                                                                        <!---------->

                                                                                        <h4 class="tipo-letra">Codigo
                                                                                                Postal</h4>
                                                                                        <input type="text"
                                                                                                name="txt_codigopostal"
                                                                                                class="form-control"
                                                                                                placeholder="Username"
                                                                                                aria-label="Username"
                                                                                                aria-describedby="basic-addon1">
                                                                                        <br>
                                                                                        <!---------->

                                                                                        <h4 class="tipo-letra">Telefono
                                                                                                (Numero)</h4>
                                                                                        <input type="text"
                                                                                                name="txt_telefono"
                                                                                                class="form-control"
                                                                                                placeholder="Username"
                                                                                                aria-label="Username"
                                                                                                aria-describedby="basic-addon1">
                                                                                        <br>


                                                                                </div>
                                                                        </div>

                                                                </div>

                                                </div>

                                                <!--------------------------->
                                                <!----->
                                                <div class="d-grid gap-2 col-6 mx-auto">
                                                        <button class="btn btn-primary mb-2">Guardar
                                                                Datos</button>
                                                        <a href="../index.php" class="btn btn-danger"
                                                                type="button">Cancelar</a>
                                                </div>
                                        </div>
                                </div>
                                </form>
                        </div>

                </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous"></script>

</body>

</html>