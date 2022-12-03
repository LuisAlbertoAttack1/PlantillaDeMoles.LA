<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/sidebar.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <script src="js/jquery.js"></script>
        <script src="js/all.js"></script>
        <script src="./js/mascaraDeCarga/jquery.blockUI.js"></script>
        <script src="./js/mascara.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <title>Principal</title>
</head>

<body>
        <?php require_once 'views/sidebar.php'; ?>
        <div class="container-fluid">
                <div class="row">
                        <div class="col-md-12">
                                <div class="ImagenEnchiladas" id="Inicio">
                                        <br>
                                        <h1 class="text-center mt-4 mb-4 tipo-Letra-Titulo text-white">El Mole Es Uno De Los
                                                Platillos
                                                Mas Emblematicos De Mexico</h1>
                                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                                <img src="./img/imgportada2.jpg" class="d-block w-100" alt="...">
                                                        </div>
                                                        <div class="carousel-item">
                                                                <img src="./img/imgportada1.jpg" class="d-block w-100" alt="...">
                                                        </div>
                                                        <div class="carousel-item">
                                                                <img src="./img/imgportada3.jpg" class="d-block w-100" alt="...">
                                                        </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                </button>
                                        </div>

                                        <h5 class="tipo-letra mt-4 ms-5 me-5 text-center text-white">La palabra mole proviene del
                                                vocablo náhuatl
                                                “molli o mulli” que significa “salsa”; su proceso culinario inicia en la
                                                época prehispánica donde se encuentra una amplia variedad de alimentos
                                                elaborados con diferentes tipos de salsas que tienen como ingrediente
                                                principal la mezcla de chiles, pero se perfeccionó en la época Colonial.
                                        </h5>
                                        <h5 class="tipo-letra mt-4 ms-5 me-5 text-white">La palabra mole proviene del vocablo
                                                náhuatl
                                                “molli o mulli” que significa “salsa”; su proceso culinario inicia en la
                                                época prehispánica donde se encuentra una amplia variedad de alimentos
                                                elaborados con diferentes tipos de salsas que tienen como ingrediente
                                                principal la mezcla de chiles, pero se perfeccionó en la época Colonial.
                                        </h5>

                                        <br>
                                </div>
                                <!-- ///////////////// -->
                                <div class="ImagenFondo" id="ProductosCategorias">

                                        <br><br>
                                        <h1 class="text-center mb-4 tipo-Letra-Titulo text-white" data-aos="slide-up" data-aos-duration="4000">Productos Que Puedes Adquirir
                                        </h1>
                                        <h3></h3>
                                        <!----------------------->
                                        <div class="row row-cols-1 row-cols-md-2 g-4 mt-2 mb-2">
                                                <div class="col-sm-6">
                                                        <div class="card colorTransparenteCards rounded border-0" data-aos="fade-right" data-aos-duration="4000">
                                                                <div class="card-img text-center">
                                                                        <img src="./img/IMG3.png" class="img-fluid tamaño-img-primero mt-4 mb-4 mx-auto d-block rounded" alt="No Encuentro Tu Img">
                                                                </div>
                                                                <div class="card-body text-center tipo-letra">
                                                                        <h3 class="text-white">Seccion De Productos De Moles</h3>
                                                                        <h6 class="text-white">Te Mostraremos Una Gran Variedad De
                                                                                Productos</h6>
                                                                        <div class="d-grid gap-2 col-6 mx-auto mt-4">
                                                                                <a href="./views/Views-vistaMoles.php" class="btn fondo-color-indefinido-center rounded-pill" type="button">Ingresar</a>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col-sm-6">
                                                        <div class="card colorTransparenteCards rounded border-0" data-aos="fade-left" data-aos-duration="4000">
                                                                <div class="card-img ">
                                                                        <div class="card-img text-center">
                                                                                <img src="./img/img5.png" class="img-fluid tamaño-img-primero mt-4 mb-4 mx-auto d-block rounded" alt="No Encuentro Tu Img">
                                                                        </div>
                                                                </div>
                                                                <div class="card-body text-center tipo-letra">
                                                                        <h3 class="text-white">Seccion De Productos De Botanas</h3>
                                                                        <h6 class="text-white">Te Mostraremos Una Gran Variedad De
                                                                                Productos</h6>
                                                                        <div class="d-grid gap-2 col-6 mx-auto mt-4">
                                                                                <a href="./views/Views-vistaBotanas.php" class="btn fondo-color-indefinido-center rounded-pill" type="button">Ingresar</a>
                                                                        </div>

                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <!---------------------->
                                        <br><br>
                                </div>
                                <!-- ///////////////// -->
                                <div class="ImagenFondoDos" id="Recetas">

                                        <br><br>
                                        <h1 class="text-center mb-4 tipo-Letra-Titulo text-white" data-aos="slide-up" data-aos-duration="4000">Platillos Que Puedes Realizar Con
                                                Los Productos Que Nos Compran
                                        </h1>
                                        <div class="row row-cols-1 row-cols-md-3 g-6 mt-4 mb-4">
                                                <div class="col">
                                                        <div class="card colorTransparenteCards rounded border-0" data-aos="zoom-out" data-aos-duration="4000">
                                                                <div class="card-img">
                                                                        <img src="./img/img1.png" class="img-fluid tamaño-De-Tres-Img mt-4 mb-4 mx-auto d-block" alt="No Encuentro Tu Img">

                                                                </div>
                                                                <div class="card-body text-center tipo-letra">
                                                                        <h2 class="text-center text-white">RECETAS DE MOLES</h2>
                                                                        <h3 class="text-white">Platillos De Moles</h3>
                                                                        <h6 class="text-white">El mole es uno de los platillos más
                                                                                tradicionales de la gastronomía
                                                                                mexicana.</h6>
                                                                        <div class="d-grid gap-2 col-6 mx-auto">
                                                                                <a href="./views-Recetas/Views-Receta-1.php" class="btn mt-2 mb-2 fondo-color-indefinido-center rounded-pill">Ver
                                                                                        Receta</a>
                                                                                <!--R1-->
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col">
                                                        <div class="card  colorTransparenteCards rounded border-0" data-aos="zoom-out" data-aos-duration="4000">
                                                                <div class="card-img">

                                                                        <img src="./img/img2.png" class="img-fluid tamaño-De-Tres-Img mt-4 mb-4 mx-auto d-block" alt="No Encuentro Tu Img">

                                                                </div>
                                                                <div class="card-body text-center tipo-letra">
                                                                        <h2 class="text-center text-white">RECETAS DE MOLES</h2>
                                                                        <h3 class="text-white">Platillos De Moles</h3>
                                                                        <h6 class="text-white">El mole es uno de los platillos más
                                                                                tradicionales de la gastronomía
                                                                                mexicana.</h6>
                                                                        <div class="d-grid gap-2 col-6 mx-auto">
                                                                                <a href="./views-Recetas/Views-Receta-2.php" class="btn mt-2 mb-2 fondo-color-indefinido-center rounded-pill">Ver
                                                                                        Receta</a>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col">
                                                        <div class="card colorTransparenteCards rounded border-0" data-aos="zoom-out" data-aos-duration="4000">
                                                                <div class="card-img">
                                                                        <img src="./img/img1.png" class="img-fluid tamaño-De-Tres-Img mt-4 mb-4 mx-auto d-block" alt="No Encuentro Tu Img">
                                                                </div>
                                                                <div class="card-body text-center tipo-letra">
                                                                        <h2 class="text-center text-white">RECETAS DE MOLES</h2>
                                                                        <h3 class="text-white">Platillos De Moles</h3>
                                                                        <h6 class="text-white">El mole es uno de los platillos más
                                                                                tradicionales de la gastronomía
                                                                                mexicana.</h6>
                                                                        <div class="d-grid gap-2 col-6 mx-auto">
                                                                                <a href="./views-Recetas/Views-Receta-3.php" class="btn mt-2 mb-2 fondo-color-indefinido-center rounded-pill">Ver
                                                                                        Receta</a>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <!--SEPARACION--->
                                        <div class="row row-cols-1 row-cols-md-3 g-6 mt-4 mb-4" data-aos="zoom-out" data-aos-duration="4000">
                                                <div class="col">
                                                        <div class="card colorTransparenteCards rounded border-0" data-aos="zoom-out" data-aos-duration="4000">
                                                                <div class="card-img">
                                                                        <img src="./img/img1.png" class="img-fluid tamaño-De-Tres-Img mt-4 mb-4 mx-auto d-block" alt="No Encuentro Tu Img">

                                                                </div>
                                                                <div class="card-body text-center tipo-letra">
                                                                        <h2 class="text-center text-white">RECETAS DE MOLES</h2>
                                                                        <h3 class="text-white">Platillos De Moles</h3>
                                                                        <h6 class="text-white">El mole es uno de los platillos más
                                                                                tradicionales de la gastronomía
                                                                                mexicana.</h6>
                                                                        <div class="d-grid gap-2 col-6 mx-auto">
                                                                                <a href="./views-Recetas/Views-Receta-4.php" class="btn mt-2 mb-2 fondo-color-indefinido-center rounded-pill">Ver
                                                                                        Receta</a>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col">
                                                        <div class="card  colorTransparenteCards rounded border-0" data-aos="zoom-out" data-aos-duration="4000">
                                                                <div class="card-img">

                                                                        <img src="./img/img2.png" class="img-fluid tamaño-De-Tres-Img mt-4 mb-4 mx-auto d-block" alt="No Encuentro Tu Img">

                                                                </div>
                                                                <div class="card-body text-center tipo-letra">
                                                                        <h2 class="text-center text-white">RECETAS DE MOLES</h2>
                                                                        <h3 class="text-white">Platillos De Moles</h3>
                                                                        <h6 class="text-white">El mole es uno de los platillos más
                                                                                tradicionales de la gastronomía
                                                                                mexicana.</h6>
                                                                        <div class="d-grid gap-2 col-6 mx-auto">
                                                                                <a href="./views-Recetas/Views-Receta-5.php" class="btn mt-2 mb-2 fondo-color-indefinido-center rounded-pill">Ver
                                                                                        Receta</a>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col">
                                                        <div class="card  colorTransparenteCards rounded border-0" data-aos="zoom-out" data-aos-duration="4000">
                                                                <div class="card-img">
                                                                        <img src="./img/img6.png" class="img-fluid tamaño-De-Tres-Img mt-4 mb-4 mx-auto d-block" alt="No Encuentro Tu Img">
                                                                </div>
                                                                <div class="card-body text-center tipo-letra">
                                                                        <h2 class="text-center text-white">RECETAS DE MOLES</h2>
                                                                        <h3 class="mt-2 text-white">Platillos De Mole</h3>
                                                                        <br>
                                                                        <div class="d-grid gap-2 col-6 mx-auto">
                                                                                <a href="./views/Views-vistasRecetas.php" class="btn mt-2 mb-2 fondo-color-indefinido-center rounded-pill">Opciones De
                                                                                        Más Recetas </a>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <br><br>

                                </div>
                                <!-- ///////////////// -->
                                <div class="ImagenesFondosTres" id="InformacionSobreLaEmpresa">
                                        <br><br><br>
                                        <h1 class="text-center mb-4 tipo-Letra-Titulo text-white" data-aos="slide-up" data-aos-duration="4000">Historia Sobre La Empresa
                                        </h1>
                                        <br>
                                        <div class="row">
                                                <div class="col-sm-6">
                                                        <div class="card border-0 colorTransparenteCards">
                                                                <div class="card-body tipo-letra">
                                                                        <h3 class="text-white">Nuestro Origen</h3>
                                                                        <h4 class="mt-3 text-white"> El Mole Tradicional
                                                                                Rios® inicia su historia en la década de
                                                                                los cincuenta en San Luis Potosí, cuando
                                                                                la Sra. María Pons Nicoux de Degetau
                                                                                compartía este exquisito platillo entre
                                                                                sus familiares y amigos, mismo que
                                                                                preparaba en su casa de forma artesanal.
                                                                                Debido a su gran aceptación, decidió
                                                                                comercializarlo.</h4>
                                                                        <a href="./views/Views-vistasHistoria.php" class="btn fondo-color-indefinido-center mt-4 mb-4 rounded-pill">Optener
                                                                                Informacion Completa</a>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col-sm-6">
                                                        <div class="card colorTransparenteCards border-0">
                                                                <div class="card-body border-0">
                                                                        <div class="text-center">

                                                                                <div class="card rounded-circle border-0 tamaño-contenido-cards">
                                                                                        <div class="card-body">
                                                                                        <img src="./img/img7.jpg" class="img-fluid tamaño-de-img-card-mole rounded rounded-circle tamaño-imagen-cards" alt="">
                                                                       
                                                                                        </div>
                                                                                </div>

                                                                                </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <br><br>
                                </div>
                                <!-- ///////////////// -->

                                <div class="ColorQuejas" id="QuejasDeNuestroServicio">
                                        <br><br><br>
                                        <h1 class="text-center mb-4 tipo-Letra-Titulo" data-aos="slide-up" data-aos-duration="4000">Quejas Sobre Nuestro Servicio
                                        </h1>
                                        <br>

                                        <div class="row tipo-letra">

                                                <div class="col">
                                                        <div class="card border-0 ColorQuejas">
                                                                <div class="card-body ">

                                                                        <div class="form-floating mb-3">
                                                                                <form action="./procesos/insertar_queja.php" method="post">
                                                                                        <!-- ESTO LO COMENTE <span class="input-group-text">Favor De Ingresar Su Queja</span> -->
                                                                                        <textarea class="form-control" aria-label="With textarea" name="txt_queja"></textarea>
                                                                                        <div class="d-grid gap-2 col-6 mx-auto">
                                                                                                <button class="btn mt-4 mb-4 fondo-color-indefinido-center rounded-pill">Ingresar Informacion</button>
                                                                                        </div>
                                                                                </form>
                                                                        </div>

                                                                </div>
                                                        </div>
                                                </div>
                                                <br><br>
                                        </div>
                                        </div>
                                        <!-- ///////////////// -->
                                        <div class="ImagenFondoCuatro" id="LocalizacionDeEmpresa">
                                                <br><br><br>
                                                <h1 class="text-center mb-4 tipo-Letra-Titulo text-white" data-aos="slide-up" data-aos-duration="4000">Ubicacion Actual De La Empresa
                                                </h1>
                                                <br>
                                                <div class="row tipo-letra">
                                                        <div class="col-sm-6 ">
                                                                <div class="card border-0 colorTransparenteCards">
                                                                        <div class="card-body">
                                                                                <h5 class="card-title text-white">La Empresa Esta Hubicada
                                                                                        en la:</h5>
                                                                                <h5 class="text-white"> Lorem ipsum dolor, sit amet consectetur
                                                                                        adipisicing elit. Inventore quidem hic
                                                                                        tempore nam. Tempore asperiores adipisci
                                                                                        totam quod commodi ut rem eveniet, illum
                                                                                        quo nemo ad, placeat ipsum quisquam
                                                                                        iste.</h5>
                                                                                <a href="#" class="btn fondo-color-indefinido-center mt-4 mb-4 rounded-pill">Ingresar
                                                                                        A Mas Informacion</a>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                                <div class="card border-0 colorTransparenteCards">
                                                                        <div class="card-body">
                                                                                <div class="text-center">
                                                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15070.003100773483!2d-99.00076843332705!3d19.21699515426017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce1b3d499e89a7%3A0x10d5bd39bc57a44e!2sSan%20Antonio%20Tec%C3%B3mitl%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1665897351747!5m2!1ses-419!2smx" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                                                        <br>
                                                                                        <h5 class="text-center text-white mt-4 mb-4">LUGAR DONDE
                                                                                                PUEDEN VISITAR LA EMPRESA DE
                                                                                                MOLES TRADICIONALES RIOS</h5>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <br><br>
                                        </div>
                                        <!-- ///////////////// -->
                                        <div class="ColorQuejas" id="SeccionIniciar">
                                                <br><br><br>
                                                <h1 class="text-center mb-4 tipo-Letra-Titulo" data-aos="slide-up" data-aos-duration="4000">REGISTRO </h1>

                                                <div class="card ColorQuejas rounded border-0">
                                                        <div class="card-body">
                                                                <div class="row">
                                                                        <div class="col-sm-6">
                                                                                <div class="card border-0 ColorQuejas">
                                                                                        <div class="card-body">
                                                                                                <img src="./img/LogoDeEmpresa.png" alt="" srcset="">
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                                <div class="card border-0 ColorQuejas">
                                                                                        <div class="card-body">
                                                                                                <div class="text-center">
                                                                                                        <img src="./img/LogoDeEmpresa.png" class="TamañoLogoLoginUno mt-2 mb-2" alt="" srcset="">
                                                                                                </div>
                                                                                                <h2 class="text-center tipo-letra">
                                                                                                        Moles Tradicionales Rios
                                                                                                </h2>
                                                                                        </div>
                                                                                        <form action="./procesos/login.php" method="post">
                                                                                                <h5 class="tipo-letra"><img src="./img/imgIcono.svg" alt="" srcset="">
                                                                                                        Usuario</h5>

                                                                                                <input type="text" class="form-control" name="txt_usuario" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required="">
                                                                                                <h5 class="tipo-letra"> <img src="./img/imgIconoPass.svg" alt="" srcset="">
                                                                                                        Contraseña</h5>
                                                                                                <input type="password" class="form-control" name="txt_password" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required="">

                                                                                                <div class="row">
                                                                                                        <div class="col-sm-6">
                                                                                                                <div class="card text-center border-0 ColorQuejas">
                                                                                                                        <div class="card-body">
                                                                                                                                <div class="d-grid gap-2 d-md-block">
                                                                                                                                        <button class="btn btn-primary">Iniciar Sesion</button>

                                                                                                                                </div>
                                                                                                                        </div>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                </div>

                                                                                                <div class="col-sm-6">
                                                                                                        <div class="card text-center border-0 ColorQuejas">
                                                                                                                <div class="card-body">
                                                                                                                        <div class="d-grid gap-2 d-md-block">
                                                                                                                                <a href="./views/Views-vistaAñadirUsuario.php" class="btn btn-warning" type="button">Registrarse</a>

                                                                                                                        </div>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                </div>

                                                                                </div>

                                                                                </form>


                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>


                </div>
                <!-- ///////////////// -->
        </div>
        </div>
        </div>

                                                                           

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="js/controller_navbar.js"></script>
<!------>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
        <!------>
        <script type="text/javascript">
                $(document).ready(function() {
                        mascaraObloqueo();
                });

                function mascaraObloqueo() {
                        $.blockUI({
                                message: ' <img src="./img/image.png" width="300" height="300"> <br> Creador Fernando Lujan',

                                css: {
                                        border: 'none',
                                        // padding: '15px', 
                                        backgroundColor: 'rgba(0,0,0,0)',
                                        '-webkit-border-radius': '10px',
                                        '-moz-border-radius': '10px',
                                        // opacity: .5, 
                                        color: '#FFFFFF '
                                }
                        });

                        setTimeout($.unblockUI, 800);
                }
        </script>

        <!------>   
      <?php
      if (isset($_SESSION['sesion']) == 1) {
                echo "<script>
                Swal.fire({
                icon: 'error',
                title: 'Oops...!',
                text: 'Usuario o contraseña son incorrectos.',  
                })
                </script>";
                unset($_SESSION['sesion']);
        }
      ?>                    
</body>

</html>
