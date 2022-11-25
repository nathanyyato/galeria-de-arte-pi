<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Leitura Design gráfico</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/design_grafico.css">
</head>

<body>
	<?php include("./header.php"); ?>
	<?php
	require_once("../php/connection.php");
	$idDesign = $_GET['id'];
	$sql = "SELECT * FROM post WHERE id = $idDesign";
	$resultado = mysqli_query($conn, $sql);
	$design = mysqli_fetch_assoc($resultado);
	$design = convert_array_to_utf8($design);
	// echo $design['conteudo'];

	?>
	<main class="container">
		<h1 class="titulo">
			<?= $design['titulo'] ?>
		</h1>
		<article class="container-conteudo">
			<?= $design['conteudo'] ?>
		</article>
	</main>
</body>

</html>
