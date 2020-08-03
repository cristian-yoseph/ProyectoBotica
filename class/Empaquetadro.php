<?php
class Empaquetador {

   private $id_emp;
   private $nombre;
   private $apellido;
   private $sexo;
   private $direccion;
   private $telefono;
  


   function __construct($id_emp,$nombre,$apellido,$sexo,$direccion,$telefono,
    $usuario,$password)
   {
      $this->id_emp = $id_emp;
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->sexo = $sexo;
      $this->direccion = $direccion;
      $this->telefono = $telefono;
      $this->usuario = $usuario;
      $this->password = $password;

   }


  
} 
