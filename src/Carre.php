<?php

class Carre extends Forme
{
   private $cote;

   public function __construct($cote)
   {
      $this->cote = $cote; 
   }
   
   public function aire()
   {
       return $this->cote * $this->cote;
   }
}




