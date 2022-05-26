<?php
require_once('conexion.php');
class CrudUsuario{

    public function __construct(){

    }

    public function validarAcceso($usuario){
      $baseDatos = Conexion::conectar();
      //Definir la sentencia sql
      $sql = $baseDatos->query("SELECT * FROM usuario 
      WHERE email='".$usuario->getemail()."'
      AND contrasena='".$usuario->getcontrasena()."'"
        );
      //Ejecutar la consulta
      $sql->execute();
      //Cerrar la conexión
      Conexion::desconectar($baseDatos);
      //Retornar el resultado de la consulta a la tabla.
      return($sql->fetch());//Retornar el resultado de la consulta
    }
}


?>