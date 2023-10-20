<?php


// Database per il cibo per cani
$dogFoodDB = array(
  new Cibo("Cibo Secco", "Cibo secco di alta qualità con proteine", 20 , "secco"),
  new Cibo("Cibo Umido", "Cibo umido senza cereali", 25, "umido"),
  new Cibo("Snack", "Snack salutare per cani", 10, "snack")
);

// Database per i giocattoli per cani
$dogToyDB = array(
  new Gioco("Giocattolo di Gomma", "Giocattolo da masticare in gomma resistente", 15, "gomma"),
  new Gioco("Giocattolo di Tessuto", "Giocattolo squittente in tessuto morbido", 12, "tessuto"),
  new Gioco("Giocattolo di Plastica", "Giocattolo interattivo in plastica", 18, "plastica")
);

// Database per le cucce per cani
$dogBedDB = array(
    new Cuccia("Cuccia Piccola", "Cuccia confortevole per cani piccoli", 30.0, "piccola"),
    new Cuccia("Cuccia Media", "Cuccia ortopedica per cani di taglia media", 50.0, "media"),
    new Cuccia("Cuccia Grande", "Cuccia resistente per cani di taglia grande", 70.0, "grande")
  );


// Stampa i dati del cibo per cani
echo "<h1>Cibo per Cani</h1>";
foreach ($dogFoodDB as $food) {
    echo "<p>Nome: {$food->nome}, Descrizione: {$food->descrizione}, Prezzo: €{$food->prezzo}, Tipo: {$food->tipo}</p>";
}

// Stampa i dati dei giocattoli per cani
echo "<h1>Giocattoli per Cani</h1>";
foreach ($dogToyDB as $toy) {
    echo "<p>Nome: {$toy->nome}, Descrizione: {$toy->descrizione}, Prezzo: €{$toy->prezzo}, 
    Materiale: {$toy->material}</p>";
}

// Stampa i dati delle cucce per cani
echo "<h1>Cucce per Cani</h1>";
foreach ($dogBedDB as $bed) {
    echo "<p>Nome: {$bed->nome}, Descrizione: {$bed->descrizione}, Prezzo: €{$bed->prezzo}, 
    Dimensione: {$bed->dimensione}</p>";
}

?>