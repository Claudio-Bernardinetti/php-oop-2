<?php

require __DIR__ . '/../Database/db-dogs.php';
require __DIR__ . '/../Database/db-cats.php';

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
}

class Cibo extends Prodotto
{
  public $tipo; // ad esempio: secco, umido, snack

  public function __construct($nome, $descrizione, $prezzo, $tipo)
  {
    parent::__construct($nome, $descrizione, $prezzo);
    $this->tipo = $tipo;
  }
}

class Gioco extends Prodotto
{
  public $material; // ad esempio: gomma, tessuto, plastica

  public function __construct($nome, $descrizione, $prezzo, $material)
  {
    parent::__construct($nome, $descrizione, $prezzo);
    $this->material = $material;
  }
}

class Cuccia extends Prodotto
{
  public $dimensione; // ad esempio: piccola, media, grande

  public function __construct($nome, $descrizione, $prezzo, $dimensione)
  {
    parent::__construct($nome, $descrizione, $prezzo);
    $this->dimensione = $dimensione;
  }
}

?>