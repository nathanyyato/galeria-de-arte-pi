<?php
require('./connection.php');
$idQuiz = $_GET['id'];
$questions = $_POST['questions'];

if (count($questions) < 1) {
	echo "
	<script>
		alert('Nenhuma questão selecinada');
		window.location.href = '../pages/question.php?idQuiz=$idQuiz';
		</script>
	";
}

session_start();
$userId = $_SESSION['user']['id'];

if (!$userId) {
	echo "
	<script>
		alert('Você precisa estar logado para responder o quiz');
		window.location.href = '../pages/login.php';
		</script>
	";
}


$sql = "SELECT * FROM quiz where id = $idQuiz";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$isCorrect = false;
$question = $questions[0];
// pergunta2
$questionNum = explode('pergunta', $question)[1];

if ($row['resposta_certa'] === $questionNum) {
	$isCorrect = true;
}

$sql = "INSERT into usuarioRespondeQuiz(id_quiz, id_usuario, resposta_usuario)
		VALUES('$idQuiz', '$userId', '$isCorrect')";
$result = mysqli_query($conn, $sql);


echo "
	<script>
		window.location.href = '../pages/question.php?idQuiz=$idQuiz&isCorrect=$isCorrect&question=$question&respostaCerta={$row['resposta_certa']}';
	</script>
";
