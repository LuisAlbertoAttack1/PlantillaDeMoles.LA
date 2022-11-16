<!doctype html>
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
                                                                                <img src="../img/LogoDeEmpresa.png" class="tamañoDeLogoLogin" alt="...">
                                                                        </div>
                                                                        <div class="card-body">
                                                                        </div>
                                                                </div>
                                                        </div>

                                                        <div class="col">
                                                                <form action="../procesos/insertar_usuario.php" method="post">
                                                                        <div class="card
                                                                                border-0">
                                                                                <div class="card-body">
                                                                                        <div class="text-center">
                                                                                                <img src="../img/LogoDeEmpresa.png" class="tamaño-logo-dos
                                                                                                        mt-4
                                                                                                        mb-4" alt="" srcset="">
                                                                                        </div>
                                                                                        <h1 class="text-center
                                                                                                tipo-letra">Moles
                                                                                                Tradicionales
                                                                                                Rios</h1>
                                                                                        <h4 class="tipo-letra
                                                                                                mt-4
                                                                                                mb-4"><img src="../img/IconoUser.png" class="TamañoDeIconosEnLogin" alt="" srcset="">
                                                                                                Nombre
                                                                                                Completo</h4>
                                                                                        <div class="form-floating
                                                                                                mb-3">
                                                                                                <input type="text" class="form-control" name="nombre_completo" placeholder="Usuario" required="">
                                                                                                <label for="floatingInput" class="tipo-letra">Nombre</label>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                        </div>
                                                        <div class="col">
                                                                <div class="card
                                                                                border-0">
                                                                        <div class="card-body">
                                                                                <h4 class="tipo-letra"><img src="../img/IconoUser.png" class="TamañoDeIconosEnLogin" alt="" srcset="">
                                                                                        Nombre
                                                                                        De
                                                                                        Usuario</h4>
                                                                                <div class="form-floating
                                                                                                mb-3">
                                                                                        <input type="text" class="form-control" name="usuario" placeholder="Usuario" required="">

                                                                                        <label for="floatingInput" class="tipo-letra">Nombre
                                                                                                De
                                                                                                Usuario
                                                                                                Nuevo</label>
                                                                                </div>
                                                                                <!--------->
                                                                                <h4 class="tipo-letra"><img src="../img/IconoPasword.png" class="TamañoDeIconosEnLogin" alt="" srcset="">
                                                                                        Contraseña</h4>
                                                                                <div class="form-floating
                                                                                                mb-3">
                                                                                        <input type="password" class="form-control" name="password" placeholder="Usuario" required="">
                                                                                        <label for="floatingInput" class="tipo-letra">Contraseña
                                                                                                "Mayor
                                                                                                A
                                                                                                4
                                                                                                Dijitos"</label>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <div class="col">
                                                                <div class="card
                                                                                border-0">
                                                                        <div class="card-body">
                                                                                <h4 class="tipo-letra"><img src="../img/IconoCorreo.png" class="TamañoDeIconosEnLogin" alt="" srcset="">
                                                                                        Correo
                                                                                        Electronico</h4>
                                                                                <div class="form-floating
                                                                                                mb-3">
                                                                                        <input type="email" class="form-control" name="email" placeholder="Usuario" required="">
                                                                                        <label for="floatingInput" class="tipo-letra">Correo
                                                                                                Electronico</label>
                                                                                </div>
                                                                                <!---------->
                                                                                <h4 class="tipo-letra"><img src="../img/IconoTelefono.png" class="TamañoDeIconosEnLogin" alt="" srcset="">
                                                                                        Numero
                                                                                        Telefonico</h4>
                                                                                <div class="form-floating
                                                                                                mb-3">
                                                                                        <input type="text" class="form-control" name="telefono" placeholder="Usuario" required="">
                                                                                        <label for="floatingInput" class="tipo-letra">Numero
                                                                                                Telefonico</label>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <!--------------------------->
                                                <!----->
                                                <div class="d-grid gap-2 col-6 mx-auto">
                                                        <span class="btn btn-primary mb-2" type="button">Guardar
                                                                Datos</span>
                                                        <a href="../index.php" class="btn btn-danger" type="button">Cancelar</a>
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