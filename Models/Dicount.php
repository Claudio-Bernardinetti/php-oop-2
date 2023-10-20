<?php

class Prodotto
{
  public $nome;
  public $descrizione;
  public $prezzo;

  public function __construct($nome, $descrizione, $prezzo)
  {
    $this->nome = $nome;
    $this->descrizione = $descrizione;
    $this->prezzo = $prezzo;
  }

  public function getPrezzoScontato($sconto)
  {
    return $this->calcolaSconto($sconto);
  }

  private function calcolaSconto($sconto)
  {
    return $this->prezzo - ($this->prezzo * ($sconto / 100));
  }
}

?>