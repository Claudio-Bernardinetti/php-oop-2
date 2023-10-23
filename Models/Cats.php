<?php

require __DIR__ . '/../Database/db-cats.php';

trait Loggable {
  public function log($message) {
      echo $message;
  }
}
trait Namable {
  public $name;

  public function setName($name) {
      $this->name = $name;
  }

  public function getName() {
      return $this->name;
  }
}
class Prodotto {
  //use Loggable, Namable;
  
  
    public $immagine;
    public $name;
    public $descrizione;
    public $prezzo;
  
    public function __construct($immagine, $nome, $descrizione, $prezzo) {
      $this->immagine = $immagine;
      $this->name = $nome;
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
    }
  }
  
  class Cuccia extends Prodotto {
    public $dimensione;
  
    public function __construct($immagine, $nome, $descrizione, $prezzo, $dimensione) {
      parent::__construct($immagine, $nome, $descrizione, $prezzo);
      $this->dimensione = $dimensione;
      ini_set('display_errors',1);
      error_reporting(E_ALL);
  }
}
         