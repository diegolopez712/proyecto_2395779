<?php
require_once('../modelo/Usuario.php');
require_once('../modelo/crudUsuario.php');
class ControladorUsuario{
    public function __construct(){

    }

    public function validarAcceso($e_email,$e_contrasena){
        $usuario = new Usuario();
        $usuario->setemail($e_email);
        $usuario->setcontrasena($e_contrasena);
        $crudUsuario = new CrudUsuario();
        $crudUsuario->validarAcceso($usuario);
    }
}

$controladorUsuario = new ControladorUsuario();
$controladorUsuario->validarAcceso('diego@gmail.com','1234');




?>