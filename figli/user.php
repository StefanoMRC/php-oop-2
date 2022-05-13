<?php
    
    class Cliente {
        
    public $nomeUtente;
    public $cognome;
    public $iscritto;
    public $sconto;
    public function __construct(
        $_nomeUtente,
        $_cognome,
        $_iscritto){

        $this -> setNomeUtente($_nomeUtente);
        $this -> setCognome($_cognome);
        $this -> setIscritto($_iscritto);

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


    public function setSconto($iscritto){
        if($iscritto == true){
           $this-> sconto = "hai uno sconto del 20% in quanto registrato";
           
        } else {
            $this-> sconto  = 'registrati per avere uno sconto del 20%';
           
        }
    }
    public function getSconto(){
        return $this -> sconto;
    }
}
?>