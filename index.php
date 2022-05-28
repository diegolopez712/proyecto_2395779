<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso</title>
</head>
<body>
    <h1 align='center'>Acceso</h1>
    <form action="Controlador/controladorUsuario.php" method="post">
        <label>Usuario</label>
        <input type="text" id="email" name="email" />
        <br>
        <label>Contraseña</label>
        <input type="password" id="contrasena" name="contrasena" />
        <br>
        <button type="submit" name="Acceder" >Acceder</button>
    </form>
</body>
</html>