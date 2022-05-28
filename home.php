<?php
session_start();
//Si la variable de sesión no está definida mandar al login
if(!isset($_SESSION['idRol'])){
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Básico</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div id="contenedor">
        <div id="superior">
            Bienvenido <?php echo $_SESSION['email']; ?>
            <br>
            <a href="Controlador/ControladorUsuario.php?CerrarSesion">Salir</a>
        </div>
        <div id="medio">
            <div id="izquierdo">
                <a href="vista/listarCategoria.php">Categoría</a>
                <br>
                <a href="">Producto</a>
            </div>
            <div id="derecho">
                Crud básico
            </div>
        </div>

    </div>
</body>
</html>