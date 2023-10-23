<?php


trait Loggable {
  public function log($message) {
      echo $message;
  }
}
trait Namable {
  public $nome;

  public function setName($nome) {
      $this->nome = $nome;
  }

  public function getName() {
      return $this->nome;
  }
};
class Prodotto {
  use Namable, Loggable;
  public $immagine;
  public $nome;
  public $descrizione;
  public $prezzo;
  
  
  public function __construct($immagine, $nome, $descrizione, $prezzo) {
    $this->immagine = $immagine;
    $this->nome = $nome;
    $this->descrizione = $descrizione;
    $this->prezzo = $prezzo;
  }
}
  
  class Cibo extends Prodotto {
    public $tipo;
  
    public function __construct($immagine, $nome, $descrizione, $prezzo, $tipo) {
      parent::__construct($immagine, $nome, $descrizione, $prezzo);
      $this->tipo = $tipo;
    }
  }
  
  class Gioco extends Prodotto {
    public $material;
  
    public function __construct($immagine, $nome, $descrizione, $prezzo, $material) {
    parent::__construct($immagine, $nome, $descrizione, $prezzo);
    $this->material = $material;
    }
  }
  
  class Cuccia extends Prodotto {
    public $dimensione;
  
    public function __construct($immagine, $nome, $descrizione, $prezzo, $dimensione) {
      parent::__construct($immagine, $nome, $descrizione, $prezzo);
      $this->dimensione = $dimensione;
      
  }
}
require __DIR__ . '/../Database/db-cats.php';
?>