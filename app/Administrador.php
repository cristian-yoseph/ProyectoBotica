<?php
class Administrador {

   private $id_adm;
   private $nombre;
   private $apellido;
   private $sexo;
   private $direccion;
   private $telefono;
   private $usuario;
   private $password;


   function __construct($id_adm,$nombre='cris',$apellido='leon',$sexo='M',$direccion='xxxxxxxx',$telefono='999999999',
    $usuario,$password)
   {
      $this->id_adm= $id_adm;
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->sexo = $sexo;
      $this->direccion = $direccion;
      $this->telefono = $telefono;
      $this->usuario = $usuario;
      $this->password = $password;

   }
   pucblic function Crea_Farmaceutico(){
      resturn null;
   }


   function UsuarioGenerar()
   {
       return $this->usuario;
       
   }  
    function PasswordGenerar()
   {
       
       return $this->password;
   }  

  
} 

$Administrador1=new Administrador(1,"cristian","leon","M","xxxxxxxxxxxx","998562478","cris_leon",10231023);
$Administrador2=new Administrador(1,"cristian","leon","M","xxxxxxxxxxxx","998562478","cris_leon",10231023);
echo "Cuenta del usuario: ".$Administrador1->UsuarioGenerar()."<br>";
echo "Pass del usuario: ".$Administrador1->PasswordGenerar()."<br>";




?>