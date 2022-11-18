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
	<link rel="stylesheet" href="../css/arts.css" />
	<title>Artplace</title>
</head>

<body>

	<main>
		<div id="images"></div>
		<div id="contagemDeImagens"></div>
		<div class="controllers buttons">
			<button class="btn prev" onclick="anterior()">Anterior</button>
			<button class="btn next outline" onclick="proxima()">Próximo</button>

			<a href="../index.php" id="fixed" class="btn outline" onclick="goToHomePage()" type="button">
				<- </a>
		</div>
	</main>
	<script>
		let max = 21;
		let min = 1;
		let current = 1;
		let caminho = "jpg";
		const contagemDeImagens = document.getElementById("contagemDeImagens");

		function updateHTML() {
			const container = document.querySelector("#images");
			container.innerHTML = "";
			const img = document.createElement("img");
			if (current >= 22) {
				caminho = "jpeg";
			} else {
				caminho = "jpg";
			}
			img.setAttribute(
				"src",
				`../images/${caminho}/${String(current)}.${caminho}`
			);
			container.appendChild(img);
			contagemDeImagens.innerHTML = `${current}/${max}`;
		}

		function proxima() {
			if (current + 1 <= max) current = current + 1;
			updateHTML();
		}

		function anterior() {
			if (current - 1 >= min) current = current - 1;
			updateHTML();
		}

		updateHTML();
	</script>
</body>

</html>
