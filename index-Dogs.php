<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cani</title>
    <!-- Title -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap -->
</head>
<body>
   <header>
      <?php include __DIR__ . '/Layout/head.php'; ?>
   </header>
   <main>
      <?php include __DIR__ . '/Models/Dogs-Cats.php'; ?>
      
   </main>
   <footer>
      <?php include __DIR__ . '/Layout/foot.php'; ?>
   </footer>
    
</body>
</html>
