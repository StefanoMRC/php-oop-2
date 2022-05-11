<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto). -->

<?php



class Prodotto{
    public $nome;
    public $genere;
    public $prezzo;

    public function __construct($_nome, $_genere,$_prezzo){
        $this -> setNome($_nome);
        $this -> setGenere($_genere);
        $this -> setPrezzo($_prezzo);


    }

    public function setNome($_nome)
    {
        $this->nome = $_nome;

        return $this;
    }
    
    
    public function setGenere($_genere)
    {
        $this->genere = $_genere;

        return $this;
    }
    
  


    public function setPrezzo($_prezzo)
    {
        $this->prezzo = $_prezzo;

        return $this;
    }    
    
   
   
}
