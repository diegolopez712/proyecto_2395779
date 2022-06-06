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
    <form id="frmAcceso" action="Controlador/controladorUsuario.php" method="post">
        <label>Usuario</label>
        <input type="text" id="email" name="email" />
        <br>
        <label>Contraseña</label>
        <input type="password" id="contrasena" name="contrasena" />
        <p id="mensaje"></p>
        <input type="hidden" name="Acceder" />
        <button type="button" onclick="validarAcceso()">Acceder</button>
    </form>
    <script>
        function validarAcceso(){
            let email = "";
            let contrasena = "";
            email = document.getElementById('email').value;
            contrasena = document.getElementById('contrasena').value;
            if(email == "" || contrasena == ""){
                document.getElementById('mensaje').innerHTML = 'El usuario y/o contraseña no pueden estar vacias';
            }
            else{
                document.getElementById('frmAcceso').submit();
            }
        }
    </script>
</body>
</html>