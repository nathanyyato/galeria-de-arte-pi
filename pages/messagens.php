<!DOCTYPE html>
<html lang='pt_BR'>

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/message.css">
</head>

<body>

	<?php include("./header.php"); ?>
	<?php
	$sucesso = isset($_GET["sucesso"]);
	if ($sucesso) :
	?>
		<script>
			alert("Mensagem enviada com sucesso");
			window.location.replace("./messagens.php");
		</script>
	<?php endif; ?>
	<main>
		<div class="center">
			<image src="../images/yatora.png" width=200px height=200px></image>
			<div class="card">
				<h1>Mensagens</h1>
				<p class="paragrafo">
					está gostando da página,
					ou tem alguma sugestão de como podemos melhorar sua experiência?
					deixe uma mensagem para que nossos administradores respondam assim que possível
				</p>
			</div>
		</div>

		<form action="../php/messages.php" method="POST" class="form">
			<textarea name="message" id="" cols="80" rows="5"></textarea>
			<button type="submit" class="btn outline">
				<image class="image" src="../images/send.png">
			</button>
		</form>
	</main>
</body>

</html>
