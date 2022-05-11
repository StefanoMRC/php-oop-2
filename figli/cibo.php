<?php
include __DIR__ . '/../index.php'
class Crocchette extends Prodotto{
    
    public $ingredienti;
    public $tipologia;

    public function __costruct(
        $_nome, 
        $_genere,
        $_prezzo,
        $_ingredienti,
        $_tipologia
    ){
        parent::__costruct($_nome,$_genere,$_prezzo);
        $this -> getIngredienti();
        $this -> getTipologia();
    }

    public function setIngredienti($_ingredienti)
    {
        $this->ingredienti = $_ingredienti;

        return $this;
    }

    public function getIngredienti()
    {
        return $this->ingredienti;
    }

    public function setTipologia($_tipologia)
    {
        $this->tipologia = $_tipologia;

        return $this;
    }

    public function getTipologia()
    {
        return $this->tipologia;
    }    
}
$monge = new Crocchette('crocchette monge','alimentare',50,'pollo e verdure','bio' )
echo  $monge ->$getTipologia();
?>