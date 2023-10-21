<?php

// Database per il cibo per cani
$catFoodDB = array(
    new Cibo("./img/dog-cs.webp", "Cibo Secco", "Cibo secco di alta qualità con proteine", 20 , "secco"),
    new Cibo("./img/dog-cu.webp", "Cibo Umido", "Cibo umido senza cereali", 25, "umido"),
    new Cibo("./img/dog-snack.webp", "Snack", "Snack salutare per il tuo cani ", 10, "snack")
  );
  
  // Database per i giocattoli per cani
  $catToyDB = array(
    new Gioco("./img/dog-gg.webp", "Giocattolo di Gomma", "Giocattolo da masticare in gomma resistente", 15, "gomma"),
    new Gioco("./img/cat-gg.webp", "Giocattolo di Tessuto", "Giocattolo squittente in tessuto morbido", 12, "tessuto"),
    new Gioco("./img/dog-p.webp", "Giocattolo di Plastica", "Giocattolo interattivo in plastica", 18, "plastica")
  );
  
  // Database per le cucce per cani
  $catBedDB = array(
      new Cuccia("./img/cat-cp.webp", "Cuccia Piccola", "Cuccia confortevole piccoli", 30.0, "piccola"),
      new Cuccia("./img/dog-c.webp", "Cuccia Media", "Cuccia ortopedica di taglia media", 50.0, "media"),
      new Cuccia("./img/dog-cg.webp", "Cuccia Grande", "Cuccia resistente taglia grande", 70.0, "grande")
    );
  

    echo "<div class='container'>";
    echo "<h3 class='text-center pt-5'>Cibo per Cani</h3>";
    echo "<div class='row justify-content-center'>";
    foreach ($catFoodDB as $food) {
       printCard($food);
    }
    echo "</div>";
    echo "</div>";
    
    echo "<div class='container'>";
    echo "<h3 class='text-center p-3'>Giocattoli per Cani</h3>";
    echo "<div class='row justify-content-center'>";
    foreach ($catToyDB as $toy) {
       printCard($toy);
    }
    echo "</div>";
    echo "</div>";
    
    echo "<h3 class='text-center p-3'>Cucce per Cani</h3>";
    echo "<div class='container'>";
    echo "<div class='row justify-content-center'>";
    foreach ($catBedDB as $bed) {
       printCard($bed);
    }
    echo "</div>";
    echo "</div>";
?>