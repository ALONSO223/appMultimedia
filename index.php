<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación Multimedia</title>
    <link rel="stylesheet" href="lb/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/all.min.css" />
    <style>
    body {
        background: url(img/fondo-triangulos.webp);
        background-size: cover
    }

    thead:nth-child(1) {
        background-color: #008e97;
    }

    .colorLogoVerde {
        background-color: #008e97;
    }

    .colorLogoNaranja {
        background-color: #f58220
    }

    .perstxt {
        font-family: monospace
    }

    @media(max-width: 576px) {
        .perstxt {
            font-size: 15px
        }
    }

    .aplicaciones {
        font-size: 50px;
        color: orange
    }

    .copy {
        font-size: 50px;
        color: orange
    }

    
    </style>
</head>

<body>
    <!--BARRA DE NAVEGACION-->
    <div class="container-fliud">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <!--icono app-->
                <a class="navbar-brand" href="#"><img src="img/logoDM_web.png" class="img-fluid" style="width:40%"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Interface Multimedia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nosotros</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Registro
                            </a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Cerrar</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <!------------------------------->
    <!--Cuerpo de la interfaz-->
    <main class="container-fluid">
        <!--La capa superior de la interfaz-->
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-6 mt-3">
                <form method="post" action="insertar.php">
                    <h5 for="form-File" class="form-label pt-2 mb-3 text-center text-black">
                        SUBIR ARCHIVOS A LA BASE DE DATOS
                    </h5>
                    <input class="form-control" type="text" placeholder="Nombre del archivo"
                        arial-label="default input example">
                    <div class="col-12 d-flex justify-content-center mt-2 mb-3">
                        <button type="submit"
                            class="shadow rounded border colorLogoNaranja text-white">EXAMINAR</button>
                    </div>
                </form>
            </div>



            <div class="col-sm-12 col-md-6 mt-3">
                <form method="post" action="insertar.php">
                    <h5 for="form-File" class="form-label pt-2 mb-3 text-center text-black">
                        ELIMINAR ARCHIVOS DE LA BSE DE DATOS
                    </h5>
                    <input class="form-control" type="text" placeholder="Nombre del archivo"
                        arial-label="default input example">
                    <div class="col-12 d-flex justify-content-center mt-2 mb-3">
                        <button type="submit"
                            class="shadow rounded border colorLogoNaranja text-white">EXAMINAR</button>
                    </div>
                </form>
            </div>


        </div>
        <!--Tabla para mostrar los datos de la bdatos-->
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre del archivo</th>
                        <th scope="col">Imagen del archivo</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>

        </div>
        <!--Pie de la aplicación-->
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-4">
                <i class=" copy fa-sharp fa-solid fa-copyright "></i>
                COPYRIGHT APP FINANCIADA POR UE
                <div class="row">
                    <div class="col ">
                        <i class="aplicaciones fa-brands fa-facebook"></i>
                    </div>
                    <div class="col">
                        <i class="aplicaciones fa-brands fa-instagram" style="width:50px"></i>
                    </div>
                    <div class="col">
                        <i class="aplicaciones fa-brands fa-twitter" button="https://getbootstrap.com/docs/5.0/content/tables/"></i>
                    </div>
                    <div class="col">
                        <i class="aplicaciones fa-brands fa-youtube"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-8">
                IZQUIERDA
                <div class="row">
                    <div class="col">
                        <img src="img/comunidadMadrid.jpg" style="width: 35%;">
                    </div>
                    <div class="col">
                        <img src="img/españa.png" style="width: 35%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="img/madrid.png" style="width: 35%;">
                    </div>
                    <div class="col">
                        <img src="img/uea.png" style="width: 35%;">
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--Fin de la interfaz-->

</body>
<script src="lb/js/boostrap.min.js"></script>

</html>