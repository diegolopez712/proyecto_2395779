<?php
class Usuario{
    public function __construct(){

    }

    public function setidUsuario($e_idUsuario){
        $this->idUsuario = $e_idUsuario;
    }

    public function setemail($e_email){
        $this->email = $e_email;
    }

    public function setcontrasena($e_contrasena){
        $this->contrasena = $e_contrasena;
    }

    public function setidRol($e_idRol){
        $this->idRol = $e_idRol;
    }    
    
    public function setestado($e_estado){
        $this->estado = $e_estado;
    }

    public function setlogueado($e_logueado){
        $this->logueado = $e_logueado;
    }

    public function getidUsuario(){
        return $this->idUsuario;
    }

    public function getemail(){
        return $this->email;
    }

    public function getcontrasena(){
        return $this->contrasena;
    }

    public function getidRol(){
        return $this->idRol;
    }

    public function getestado(){
        return $this->estado;
    }

    public function getlogueado(){
        return $this->logueado;
    }
}





?>