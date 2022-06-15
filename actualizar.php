<?php

    $conex=mysqli_connect("localhost","root","","registro");

    mysqli_set_charset($conex, "utf8");

    // if ($conex) {
    //     echo "Conexión activa";
    // }
    $id = $_GET["id"];
    $usuarios = "SELECT * FROM datos WHERE id = '$id'";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar usuario</title>
    <link rel="stylesheet" href="estilo.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha484-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4e458e8f90.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <!-- Menu -->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="."><img src="images/logo.png" alt=""></a>
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
 
        <form class="row g-1" style="padding: 50px;" id="tabla" action="procesar_actualizar.php" method="post">
                        <div class="col-12 col-sm-1 col-md-1" style="background-color: #C0D23E; color:white"><h4><strong>Id</strong></h4></div>
                        <div class="col-12 col-sm-4 col-md-4" style="background-color: #C0D23E; color:white"><h4><strong>Nombre</strong></h4></div>
                        <div class="col-12 col-sm-4 col-md-4" style="background-color: #C0D23E; color:white"><h4><strong>Email</strong></h4></div>
                        <div class="col-12 col-sm-2 col-md-2" style="background-color: #C0D23E; color:white"><h4><strong>Registro</strong></h4></div>
                        <div class="col-12 col-sm-1 col-md-1" style="background-color: #C0D23E; color:white"><h6><strong>Operación</strong></h6></div>
                        <?php $resultado = mysqli_query($conex, $usuarios);
                        
                        while($row=mysqli_fetch_assoc($resultado)) { ?>
                        <div class="col-12 col-sm-1 col-md-1" style="border-style: ridge; ">
                            <input type="reset" value="<?php echo $row["id"];?>">
                        </div>
                        <div class="col-12 col-sm-4 col-md-4" style="border-style: ridge; ">
                            <input type="text" value="<?php echo $row["nombre"];?>">
                        </div>
                        <div class="col-12 col-sm-4 col-md-4" style="border-style: ridge; ">
                            <input type="text" value="<?php echo $row["email"];?>">
                        </div>
                        <div class="col-12 col-sm-2 col-md-2" style="border-style: ridge; ">
                            <input type="text" value="<?php echo $row["fecha_reg"];?>">
                        </div>
                        <div class="col-12 col-sm-1 col-md-1">
                            <input type="submit" value="Act">
                        </div>
                        <div class="col-12" style="padding-top: 2rem; padding-bottom: 2rem">
                            <a href="editar.php" target="_self">
                                <i class="fa-solid fa-circle-arrow-left"> Retornar a edición</i>
                            </a>
                        </div>
                    <?php } ?>
        </form>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha484-pprn4074KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv4qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>