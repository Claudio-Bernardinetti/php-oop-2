<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gatti</title>
    <!-- Title -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap -->
</head>
<body>
    <header>
        <?php include __DIR__ . '/Layout/head.php'; ?>
    </header>
    <main>
        <?php include __DIR__ . '/Models/Cats.php'; ?>
        <?php
        
        function printCard($product) {
            $dettagli = '';
            if ($product instanceof Cibo) {
                $dettagli = "<p>Tipo: {$product->tipo}</p>";
            } elseif ($product instanceof Gioco) {
                $dettagli = "<p>Materiale: {$product->material}</p>";
                
            } elseif ($product instanceof Cuccia) {
                $dettagli = "<p>Dimensione: {$product->dimensione}</p>";
            }
            
     
         echo "
         <div class='col-lg-3 col-md-6 col-sm-12 justify-content-center mx-5'>
             <div class='card my-5' style='width: 18rem;'>
                 <div class='card-body'>
                     <img src='{$product->immagine}' alt='{$product->nome}' class='card-img-top'>
                     <div class='card-text'>
                         <h5 class='card-title'>{$product->nome}</h5>
                         <p>Descrizione: {$product->descrizione}</p>
                         <p>Prezzo: €{$product->prezzo}</p>
                         
                         $dettagli
                     </div>
                 </div>
             </div>
         </div>";
        }
        
        ?>
   </main>
   <footer>
      <?php include __DIR__ . '/Layout/foot.php'; ?>
   </footer>
    
</body>
</html>

<style>
   body {
      background-color: whitesmoke;
   }
   .card {
      cursor: pointer;
   }
   .card:hover {
      border: 1px solid green;
   }

</style>