<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Calistoga&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/form.css" />
  <link rel="stylesheet" href="../css/admin.css" />
  <title>Artplace</title>
</head>

<body>
  <div class="card">
    <h2 class="cardTitle">Login</h2>
    <form action="#">
      <div class="inputGroup">
        <label for="questao">Entre com a questão</label>
        <textarea name="questao" required></textarea>
      </div>

      <section>
        <div class="alternativas">
          <div class="inputGroup">
            <label for="alternativa1">Alternativa 1</label>
            <input type="text" name="alternativa1" required />
            <button type="button" class="tooltip_container">
              <p class="tooltip">Remover alternativa</p>
              <span class="material-symbols-outlined">
                close
              </span>
            </button>
          </div>
          <div class="inputGroup">
            <label for="alternativa2">Alternativa 2</label>
            <input type="text" name="alternativa2" required />
          </div>
          <div class="inputGroup">
            <label for="alternativa3">Alternativa 3</label>
            <input type="text" name="alternativa3" required />
          </div>
          <div class="inputGroup">
            <label for="alternativa4">Alternativa 4</label>
            <input type="text" name="alternativa4" required />
          </div>
        </div>
        <div class="addAlternativa">
          <button type="button" class="tooltip_container">
            <p class="tooltip">Adicionar alternativa</p>
            <span class="material-symbols-outlined">
              add
            </span>
          </button>
        </div>
      </section>

      <div class="buttons">
        <button class="btn" type="submit">Enviar Post</button>
        <a href="../index.html" class="btn outline" onclick="goToHomePage()" type="button">
          Cancelar
          </button>
      </div>
    </form>
  </div>
  <script>
    function goToHomePage() {
      history.back();
    }
  </script>
</body>

</html>