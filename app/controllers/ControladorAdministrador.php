<?php


class ControladorAdministrador
  { 
    public function __construct(){}
 
    public function index(){
     
      
      $usuarios=Administrador::all();
      require_once('ProyectoBotica/index.php');
    }
 
    public function register(){
      require_once('ProyectoBotica/register.php');
    }
 
    
    public function guardar($Administrador){
      Administrador::save($usuario);
      header('Location: ../index.php');
    }
 
    public function update($Administrador){
      Administrador::update($usuario);
      header('Location: ../index.php');
    }
 
    public function delete($id_adm){
      //se está de dentro del directorio Controllers y se debe salir
      require_once('..//Administrador.php');
      Administrador::delete($id);
      header('Location: ../index.php');
    
    
    public function error(){
      require_once('app/Administrador/error.php');
    } 
  }


?>