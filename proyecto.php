<?php 
$pg = "proyecto";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="proyectos">

   
    <?php include_once("header.php") ?>
  
    <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Los siguientes son algunos de los trabajos que hemos realizados</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4 p-3">
                <div class="proyecto">
                    <img src="imagenes/abmclientes.png" alt="ABM clientetes" class="img-fluid">
                    <div class="py-3">
                        <h2 class="p-3 d-block">ABM CLIENTES</h2>
                        <p class="p-3 d-block">Alta, baja y modificación de un registro de clientes. Realizado en HTML,
                            CSS, PHP, Bootstrap y Json.
                        </p>
                    </div>
                    <div class="row my-5">
                        <div class="col-6 ps-4">
                            <a href="" target="_blank" class=" btn btn-outline-success">Ver online</a>
                        </div>
                        <div class="col-6 tex-center">
                            <a href="" target="_blank">Ver codigo fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 p-3">
                <div class="proyecto">
                    <img src="imagenes/abmventas.png" alt="ABM clientetes" class="img-fluid">
                    <div class="py-3">
                        <h2 class="p-3 d-block">SISTEMA DE GESTIÓN DE VENTAS</h2>
                        <p class="p-3 d-block">Sistema de gestión de clientes, productos y ventas. Realizado en HTML,
                            CSS,
                            PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.
                        </p>
                    </div>
                    <div class="row my-5">
                        <div class="col-6 ps-4">
                            <a href="" target="_blank" class="btn btn-outline-success">Ver online</a>
                        </div>
                        <div class="col-6 tex-center">
                            <a href="" target="_blank">Ver codigo fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 p-3">
                <div class="proyecto">
                    <img src="imagenes/proyecto-integrador.png" alt="ABM clientetes" class="img-fluid">
                   <div class="py-3">
                    <h2 class="p-3 d-block">PROYECTO INTEGRADOR</h2>
                    <p class="p-3 d-block">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX,
                        HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y
                        funcionalidades a fines.
                    </p>
                </div>
                    <div class="row my-5">
                        <div class="col-6 ps-4">
                            <a href="" target="_blank" class="btn btn-outline-success">Ver online</a>
                        </div>
                        <div class="col-6 tex-center">
                            <a href="" target="_blank">Ver codigo fuente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-3">
                <i class="fa-brands fa-github"></i>
                <i class="fa-brands fa-linkedin"></i>
            </div>
            <div class="col-12 col-sm-3">Sponsor <a href="https.//depcsuite.com">De PC Suite</a></div>
            <div class="col-12 col-sm-3"><a href="mailto:contacto@fabicrack218.com.ar">contacto@fabicrack218.com.ar</a>
            </div>

        </div>
    </footer>
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=5411250604417"><i class="fa-brands fa-whatsapp"></i></a>

    </div>
</body>

</html>