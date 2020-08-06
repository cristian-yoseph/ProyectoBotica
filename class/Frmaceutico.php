<?php
class Farmaceutico {

   private $id_farm;
   private $nombre;
   private $apellido;
   private $sexo;
   private $direccion;
   private $telefono;


   function __construct($id_farmid_farm,$nombre,$apellido,$sexo,$direccion,$telefono,
    $usuario,$password)
   {
      $this->id_farm = $id_farm;
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->sexo = $sexo;
      $this->direccion = $direccion;
      $this->telefono = $telefono;
      $this->usuario = $usuario;
      $this->password = $password;

   }

   pucblic function vender(){
      resturn null;
   }

  
} 
