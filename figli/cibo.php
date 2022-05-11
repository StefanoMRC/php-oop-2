<?php
include __DIR__ . '/../index.php';
class Crocchette extends Prodotto {
    
    public $ingredienti;
    public $tipologia;

    public function __construct(
        $_nome, 
        $_genere,
        $_prezzo,
        $_ingredienti,
        $_tipologia
    ){
        $this -> setNome($_nome);
        $this -> setGenere($_genere);
        $this -> setPrezzo($_prezzo);
        $this -> setIngredienti($_ingredienti);
        $this -> setTipologia($_tipologia);

    }

    public function setIngredienti($_ingredienti)
    {
        $this->ingredienti = $_ingredienti;

        return $this;
    }


    public function setTipologia($_tipologia)
    {
        $this->tipologia = $_tipologia;

        return $this;
    }
   
}
$monge = new Crocchette('crocchette monge','alimentare',50,'pollo e verdure','bio' );
echo  $monge -> nome;
?>