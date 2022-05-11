<?php
include __DIR__ . '/cibo.php';
    class Cliente extends Crocchette {
    public $nomeUtente;
    public $cognome;
    public $iscritto;
    public $carta;
    public $scadenzaCarta;
    public $sconto;
    public function __construct(
        $_nome, 
        $_genere,
        $_prezzo,
        $_ingredienti,
        $_tipologia,
        $_nomeUtente,
        $_cognome,
        $_iscritto,
        $_carta,
        $_scadenzaCarta
        
    ){
        $this -> setNome($_nome);
        $this -> setGenere($_genere);
        $this -> setPrezzo($_prezzo);
        $this -> setIngredienti($_ingredienti);
        $this -> setTipologia($_tipologia);
        $this -> setNomeUtente($_nomeUtente);
        $this -> setCognome($_cognome);
        $this -> setIscritto($_iscritto);
        $this -> setCarta($_carta);
        $this -> setScadenzaCarta($_scadenzaCarta);
    }


    public function setNomeUtente($_nomeUtente)
    {
        $this->nomeUtente = $_nomeUtente;
        return $this;
    }

    public function setCognome($_cognome)
    {
        $this->cognome = $_cognome;
        return $this;
    }

    public function setIscritto($_iscritto)
    {
        $this->iscritto = $_iscritto;
        return $this;
    }

    public function setCarta($_carta)
    {
        $this->carta = $_carta;
        return $this;
    }

    public function setScadenzaCarta($_scadenzaCarta)
    {
        $this->scadenzaCarta = $_scadenzaCarta;
        return $this;
    }
    public function setSconto($iscritto){
        if($iscritto == true){
           $this-> sconto = "hai uno sconto del 20%";
        } else {
            $this-> sconto  = null;
        }
    }
    public function getSconto(){
        return $this -> sconto;
    }
}
$clienteUno= new Cliente('crocchette', 'alimentare',50,'pollo e verdure','bio','Giorgio','de Giorgi',true,'mastercard',05/2023);
$clienteUno -> setSconto($clienteUno -> iscritto);
echo "<p>".$clienteUno-> nomeUtente." ".$clienteUno-> cognome."</p>";
echo "<p>".$clienteUno->getSconto()."</p>";
echo "<p>".$clienteUno-> genere."</p>";
echo "<p>".'pagamento con:'." ".$clienteUno-> carta."</p>";
?>