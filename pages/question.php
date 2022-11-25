<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Quiz | artplace</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/quiz.css">
</head>

<body>
	<?php include("./header.php"); ?>
	<?php
	$idQuiz = $_GET['idQuiz'];
	$respostaCorreta = isset($_GET['isCorrect']) ? $_GET['isCorrect'] : null;
	$question = isset($_GET['question']) ? $_GET['question'] : null;
	$alternativaCorreta = isset($_GET['respostaCerta']) ? $_GET['respostaCerta'] : null;
	include("../php/connection.php");
	$sql = "SELECT * FROM quiz WHERE quiz.id = $idQuiz";
	$result = mysqli_query($conn, $sql);
	$row_quiz = mysqli_fetch_assoc($result);
	$row_quiz = convert_array_to_utf8($row_quiz);

	$questoes4respostas = "SELECT * FROM questoes4respostas WHERE id = $idQuiz";
	$trueOrFalse = "SELECT * FROM trueOrFalse WHERE id = $idQuiz";

	$questoes4respostas_result = mysqli_query($conn, $questoes4respostas);
	$trueOrFalse_result = mysqli_query($conn, $trueOrFalse);

	$questoes4respostas_row = mysqli_fetch_assoc($questoes4respostas_result);
	$trueOrFalse_row = mysqli_fetch_assoc($trueOrFalse_result);

	$perguntaArr = array();
	if ($questoes4respostas_row) {
		$perguntaArr = $questoes4respostas_row;
	} else {
		$perguntaArr = $trueOrFalse_row;
	}
	$perguntaArr = convert_array_to_utf8($perguntaArr);
	$enunciado = $row_quiz['enunciado'];

	?>
	<main class="container">
		<div class="quiz">
			<div class="quiz__header">
				<h1 class="quiz__title">Quiz</h1>
			</div>
			<form class="quiz__body" action="../php/sendQuiz.php?id=<?= $idQuiz ?>" method="POST">
				<div class="quiz__question">

					<p class="quiz__question-text">
						<?= $enunciado ?>
					</p>
					<div class="quiz__question-options">
						<?php
						foreach ($perguntaArr as $key => $value) :
							if ($key != 'id') :
								$checked = '';
								$class = '';
								if ($question) {
									$numKey = explode('pergunta', $key)[1];
									$correct = $numKey == $alternativaCorreta ? true : false;
									if ($key === $question) {
										$class = $respostaCorreta ? 'quiz__question-option--correct' : 'quiz__question-option--incorrect';
										$checked = 'checked';
									}
									if ($correct) {
										$class = 'quiz__question-option--correct';
									}
								}
						?>
								<label class="quiz__question-option <?= $class ?>">
									<input type="radio" name="questions[]" value="<?= $key ?>" <?= $checked ?> />
									<?= $value ?>
								</label>
						<?php
							endif;
						endforeach;
						?>
					</div>
				</div>
				<div class="buttons">
					<button class="btn outline">
						Enviar
					</button>
				</div>
			</form>
		</div>
	</main>
</body>

</html>
