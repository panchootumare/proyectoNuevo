<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/inicio.css">
    <link rel="shortcut icon" href="styles/sonido.png"/>
</head>

<body>
    <div class="row">
        <div class="col-md-auto">
            <a href="index.php" class="p-3"><img id="logo" src="styles/sonido.png" alt=""></a>
        </div>
        <div class="col text-center">
            <h1 class="p-5 display-1">MusiClub</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-1  text-center">
            <a href="anadir.php">
                <img id="imgAnadir" src="styles/imagenes/anadir (1).png"></a><br><br>
            <h3>Añadir</h3>
        </div>
        <div class="col-1"></div>
        <div class="col-1 boder text-center">
            <a href="modificar.php"><img id="imgMod" src="styles/imagenes/pincel.png"></a><br><br>
            <h3>Modificar</h3>
        </div>
        <div class="col-1"></div>
        <div class="col-1  text-center">
            <a href="buscar.php"><img id="imgBuscar" src="styles/imagenes/lupa.png"></a><br><br>
            <h3>Buscar</h3>
        </div>
        <div class="col-1"></div>
        <div class="col-1 text-center">
            <a href="eliminar.php"><img id="imgEliminar" src="styles/imagenes/eliminar.png"></a><br><br>
            <h3>Eliminar</h3>
        </div>
        <div class="col-1 text-center"></div>
        <div class="col-1">
            <a href="ver.php"><img id="imgVer" src="styles/imagenes/ver.png"></a><br><br>
            <h3>Todos</h3>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="container pt-5">
        <div class="row" id="info">
            <h2 class="text-center">Hola, administrador ¿Deseas administrar las anédotas de tus clientes? ¡Usa los botones que están justo arriba de este texto!</h2>
        </div>
    </div>

    <footer class="bg-light text-center text-lg-start" id="footer">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
          © 2020 Copyright:
          <a class="text-dark" href="https://www.instagram.com/don_tetera/">Francisco Alcota</a>
        </div>
    </footer>









    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>