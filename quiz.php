<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Quiz | artplace</title>
	<link rel="stylesheet" href="./css/quiz.css">
</head>

<body>
	<?php include(__DIR__ . "/header.php"); ?>
	<?php require(__DIR__ . "/php/getAllQuizes.php"); ?>
	<main class="container">
		<h1>Quiz</h1>
		<div class="cards">
			<?php foreach ($Quizes as $quiz) : ?>
				<a href="./pages/question.php?idQuiz=<?= $quiz['id'] ?>
					" class="card">
					<?= $quiz['enunciado'] ?>
				</a>
			<?php endforeach; ?>
		</div>
	</main>
</body>

</html>
