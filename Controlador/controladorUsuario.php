<?php
session_start();//Emplear variables de sesión
require_once('../modelo/Usuario.php');
require_once('../modelo/crudUsuario.php');
class ControladorUsuario{
    public function __construct(){

    }

    public function validarAcceso($e_email,$e_contrasena){
        $usuario = new Usuario();
        $usuario->setemail($e_email);
        $usuario->setcontrasena(hash('sha512',$e_contrasena));
        $usuario->setlogueado(false);
        $crudUsuario = new CrudUsuario();
        $crudUsuario->validarAcceso($usuario);
        if($usuario->getlogueado()==true){
            $_SESSION['idRol'] = $usuario->getidRol();
            $_SESSION['email'] = $usuario->getemail();
            header("Location:../home.php");
        }
        else{
            echo "
            <script>
                alert('Usuario y/o clave incorrectas');
                document.location.href = '../index.php';
            </script>
            ";
        }

    }

    public function cerrarSesion(){
        session_destroy();
        header("Location:../index.php");
    }
}

$controladorUsuario = new ControladorUsuario();
if(isset($_REQUEST['Acceder']))
{
    $email = $_REQUEST['email'];
    $contrasena = $_REQUEST['contrasena'];
    $controladorUsuario->validarAcceso($email,$contrasena);
}

if(isset($_REQUEST['CerrarSesion'])){
    $controladorUsuario->cerrarSesion();
}

?>