<!DOCTYPE html>
<html lang="pt_BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/design_grafico.css">
	<title>Design Gráfico</title>
</head>

<body>
	<?php include_once("./header.php") ?>
	<?php require_once("../php/getAllDesigns.php"); ?>
	<?php

	function limitarTexto($texto, $limite)
	{
		$contador = strlen($texto);
		if ($contador >= $limite) {
			$texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')) . '...';
			return $texto;
		} else {
			return $texto;
		}
	}
	?>
	<main class="container">
		<h1>Design gráfico</h1>
		<div class="cardContainer">
			<?php foreach ($posts as $post) : ?>
				<a href="./design.php?id=<?= $post['id'] ?>
					" class="card">
					<h2 class="cardTitle">
						<?= limitarTexto($post['titulo'], 100) ?>
					</h2>
					<p>
						<?= limitarTexto($post['resumo'], 100) ?>
					</p>
				</a>
			<?php endforeach; ?>
		</div>
	</main>
</body>

</html>
