<?php
class Carta{
    public $tipoCarta;
    public $numeroCarta;
    public $meseScadenza;
    public $annoScadenza;

    public function __construct(
        $_tipoCarta,
        $_numeroCarta,
        $_meseScadenza,
        $_annoScadenza
        ){

        $this -> setTipoCarta($_tipoCarta);
        $this -> setNumeroCarta($_numeroCarta);
        $this -> setMeseScadenza($_meseScadenza);
        $this -> setAnnoScadenza($_annoScadenza);

    }
     public function setTipoCarta($_tipoCarta)
     {
         $this->tipoCarta = $_tipoCarta;

         return $this;
     }

     public function setNumeroCarta($_numeroCarta)
     {
         $this->numeroCarta = $_numeroCarta;

         return $this;
     }

     public function setMeseScadenza($_meseScadenza)
     {
         $this->meseScadenza = $_meseScadenza;

         return $this;
     }

     public function setAnnoScadenza($_annoScadenza)
     {
         $this->annoScadenza = $_annoScadenza;

         return $this;
    }
}

?>