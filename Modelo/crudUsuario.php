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
      AND contrasena='".$usuario->getcontrasena()."'
      "
      );
      try{
        $sql->execute();
        if($sql->rowCount()> 0){//Verificar cuántos registros devuelve la consulta
          $datosUsuario = $sql->fetch();//Obtener datos de la consulta
          $usuario->setlogueado(true);
          $usuario->setidRol($datosUsuario['idRol']);
        }
      }
      catch(Exception $e) {

      }
      //Cerrar la conexión
      Conexion::desconectar($baseDatos);
      //Retornar el resultado de la consulta a la tabla.
      //return($sql->fetch());//Retornar el resultado de la consulta
    }
}


?>