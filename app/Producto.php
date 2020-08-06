<?php
class Farmaceutico {

   private $id_pro;
   private $nombre_pro;
   private $precio;
   private $fecha_de_ven;


   function __construct($id_pro,$nombre_pro,$precio,$fecha_de_ven)
   {
      $this->id_pro = $id_pro;
      $this->nombre_pro = $nombre_pro;
      $this->precio = $precio;
      $this->fecha_de_ven= $fecha_de_ven;



 

   }

   
  
} 
