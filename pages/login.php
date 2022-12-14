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
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="../css/form.css" />
	<title>Artplace</title>
</head>

<body>
	<?php include("./header.php") ?>

	<div class="card">
		<h2 class="cardTitle">Login</h2>
		<form action="../php/login.php" method="POST">
			<div class="inputGroup">
				<label for="email">Email</label>
				<input type="email" name="email" required />
			</div>
			<div class="inputGroup">
				<label for="password">Senha</label>
				<input type="password" name="password" required />
			</div>
			<div class="buttons">
				<button class="btn" type="submit">Entrar</button>
				<a href="../index.php" class="btn outline" onclick="goToHomePage()" type="button">
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
