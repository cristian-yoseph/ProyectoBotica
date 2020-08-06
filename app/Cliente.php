<?php
class Cliente {

   private $id_cli;
   private $nombre;
   private $apellido;
   private $sexo;
   private $direccion;
   private $telefono;
  

   function __construct($id_cli,$nombre,$apellido,$sexo,$direccion,$telefono,
    $usuario,$password)
   {
      $this->id_cli = $id_cli;
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->sexo = $sexo;
      $this->direccion = $direccion;
      $this->telefono = $telefono;
      $this->usuario = $usuario;
      $this->password = $password;

   }

   pucblic function comprar(){
      resturn null;
   }

  
} 





?>