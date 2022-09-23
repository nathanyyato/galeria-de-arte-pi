<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Calistoga&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/form.css" />
    <title>Artplace</title>
  </head>
  <body>
    <main>
      <div id="images">
        <?php
        $max = 21;
        $min = 1;
        for($i = $min; $i <= $max; $i++):
        ?>
          <img src="../images/ilustration/<?= $i ?>.jpg" alt="Desenho; fanart">
        <?php endfor ?>
      </div>
      <div class="controllers buttons">
        <button class="btn prev">Anterior</button>
        <button class="btn next outline">Próximo</button>
      </div>
    </main>
  </body>
</html>
