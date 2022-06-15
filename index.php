<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar usuario</title>
    <link rel="stylesheet" href="estilo.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4e458e8f90.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <!-- Menu -->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Quien soy</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#">Trabajo</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled">Habilidades</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled">Testimonios</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="images/2469489.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="images/2469489b.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="images/2469489c.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
        <?php
        $name = "Hola! un gusto saludarte";
        include("registrar.php")
        ?>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                <img src="images/designer.png" alt="Juan Francisco López">
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-8">
            <?php
                echo "<h1>$name</h1>";
            ?>
                    <h5>Si te gustan mis clases y quieres aprender un poco más, sigue mis redes sociales te invito a nuestro <strong>#universocreativo</strong></h5>

                    <!-- boton me gusta -->

                    <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpacgrafica&width=450&layout=standard&action=like&size=large&share=true&height=35&appId" width="450" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

                    <a href="https://www.facebook.com/pacgrafica" target="_blank">
                        <i class="fa-brands fa-facebook fa-2xl"></i>
                    </a>
                    <a href="https://www.instagram.com/pacgrafica/" target="_blank">
                        <i class="fa-brands fa-instagram fa-2xl"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UCKs3Z63p9qqY_K13mKYIs0w" target="_blank">
                        <i class="fa-brands fa-youtube fa-2xl"></i>
                    </a>
                    <a href="https://twitter.com/pacgrafica" target="_blank">
                        <i class="fa-brands fa-twitter fa-2xl"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/juan-francisco-lopez-designer" target="_blank">
                    <i class="fa-brands fa-linkedin fa-2xl"></i>
                    </a>
                    <a href="https://github.com/pacgrafica" target="_blank">
                        <i class="fa-brands fa-github fa-2xl"></i>
                    </a>
                    <br><br><br>
                <form method="post">
                    <h1>Suscribete!</h1>
                    <input type="text" name="nombre" placeholder="Nombre completo">
                    <input type="email" name="email" placeholder="Email">
                    <input type="submit" name="register">
                </form>
            </div>
                <div class="col-12" style="padding-top: 2rem; padding-bottom: 2rem">
                    <a href="registrados.php#tabla" target="_self">
                        <i class="fa-solid fa-eye"> Registrados</i>
                    </a>
                </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>