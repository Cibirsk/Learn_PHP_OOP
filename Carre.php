<?php

class Carre extends Forme
{
   private $cote = 4;
   
   public function aireCarre()
   {
       return $this->cote * $this->cote;
   }
}




