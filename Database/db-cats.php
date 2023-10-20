<?php

// Stampa i dati del cibo per cani
echo "<h1>Cibo per Gatti</h1>";
foreach ($dogFoodDB as $food) {
    echo "<p>Nome: {$food->nome}, Descrizione: {$food->descrizione}, Prezzo: €{$food->prezzo}, Tipo: {$food->tipo}</p>";
}

// Stampa i dati dei giocattoli per cani
echo "<h1>Giocattoli per Gatti</h1>";
foreach ($dogToyDB as $toy) {
    echo "<p>Nome: {$toy->nome}, Descrizione: {$toy->descrizione}, Prezzo: €{$toy->prezzo}, 
    Materiale: {$toy->material}</p>";
}

// Stampa i dati delle cucce per cani
echo "<h1>Cucce per Gatti</h1>";
foreach ($dogBedDB as $bed) {
    echo "<p>Nome: {$bed->nome}, Descrizione: {$bed->descrizione}, Prezzo: €{$bed->prezzo}, 
    Dimensione: {$bed->dimensione}</p>";
}

?>