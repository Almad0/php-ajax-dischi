<!-- Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->

<?php
require __DIR__ . "/dist/database.php"

// var_dump($diskDB);
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ajax dischi php ver. 1</title>
    <link rel="stylesheet" href="dist/css/style.css">
  </head>

  <body>

    <header>
      <nav>
        <img src="" alt="">
      </nav>
    </header>

    <main>
      <div class="container">
        <?php foreach ($diskDB as $info): ?>
            <div class="cd">
              <img src=<?php echo $info[poster] ?> alt="">
              <h3> <?php echo $info[title] ?>  </h3>
              <span class="author"><?php echo $info[author] ?> </span>
              <span class="year"><?php echo $info[year] ?></span>
            </div>
        <?php endforeach; ?>
      </div>
    </main>

  </body>

</html>
