<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Quiz | artplace</title>
	<link rel="stylesheet" href="../css/quiz.css">
</head>

<body>
	<?php include("../components/header.php"); ?>
	<main class="container">
		<div class="quiz">
			<div class="quiz__header">
				<h1 class="quiz__title">Quiz</h1>
				<p class="quiz__description">Teste seus conhecimentos sobre arte</p>
			</div>
			<div class="quiz__body">
				<div class="quiz__question">
					<p class="quiz__question-text">
						Qual o nome do artista que pintou a Mona Lisa?
					</p>
					<div class="quiz__question-options">
						<label class="quiz__question-option">
							<input type="radio" name="question-1" value="Leonardo da Vinci" />
							Leonardo da Vinci
						</label>
						<label class="quiz__question-option">
							<input type="radio" name="question-1" value="Vincent van Gogh" />
							Vincent van Gogh
						</label>
						<label class="quiz__question-option">
							<input type="radio" name="question-1" value="Pablo Picasso" />
							Pablo Picasso
						</label>
						<label class="quiz__question-option">
							<input type="radio" name="question-1" value="Michelangelo" />
							Michelangelo
						</label>
					</div>
				</div>
				<div class="quiz__question">
					<p class="quiz__question-text">
						Qual o nome do artista que pintou a Guernica?
					</p>
					<div class="quiz__question-options">
						<label class="quiz__question-option">
							<input type="radio" name="question-2" value="Leonardo da Vinci" />
							Leonardo da Vinci
						</label>
						<label class="quiz__question-option">
							<input type="radio" name="question-2" value="Vincent van Gogh" />
							Vincent van Gogh
						</label>
						<label class="quiz__question-option">
							<input type="radio" name="question-2" value="Pablo Picasso" />
							Pablo Picasso
						</label>
						<label class="quiz__question-option">
							<input type="radio" name="question-2" value="Michelangelo" />
							Michelangelo
						</label>
					</div>
				</div>
			</div>
		</div>
	</main>
</body>

</html>
