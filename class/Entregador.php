<?php
class Entregador {

   private $id_entr;
   private $nombre;
   private $apellido;
   private $sexo;
   private $direccion;
   private $telefono;
  

   function __construct($id_entr,$nombre,$apellido,$sexo,$direccion,$telefono,
    $usuario,$password)
   {
      $this->id_entr = $id_entr;
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->sexo = $sexo;
      $this->direccion = $direccion;
      $this->telefono = $telefono;
      $this->usuario = $usuario;
      $this->password = $password;

   }

   pucblic function EntregarPro(){
      resturn null;
   }

  
} 
