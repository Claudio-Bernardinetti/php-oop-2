<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Cani e Gatti</title>
    <!-- Title -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fontawesom -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap -->

</head>
<body>
   <header>
      <?php include __DIR__ . '/Layout/head.php'; ?>
   </header>
   <main>
      <div class="Home">
         <div class="text flex-wrap rounded">
            <div>
               <h1 class="text-center">BENVENUTI !</h1>
            </div>
            <div>
               <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis ea quasi labore rerum? Quidem eveniet maiores asperiores odio sint consequuntur.</p>
            </div>
         </div>
      </div>
   </main>
   <footer>
      <?php include __DIR__ . '/Layout/foot.php'; ?>
   </footer>
   </body>
   </html>

<style>
.Home {
   background-image: url(./img/andrew-s-ouo1hbizWwo-unsplash.jpg);
   background-size: cover;
   background-position: center;
   width: 100%;
   height: 90vh;
   overflow: auto; 
}

.text {
   background-color: rgba(0, 0, 0, 0.5);
   margin-right: 30%;
   margin-left: 30%;
   margin-top: 15%;
   padding: 1rem;
}
.text h1 {
   font-size: 5vw;
   color: gold;
}
.text p {
   color: white;
}
</style>