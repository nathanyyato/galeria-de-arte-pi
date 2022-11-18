<?php
require('./connection.php');
session_start();
$message = isset($_POST['message']) ? $_POST['message'] : '';
$userId = $_SESSION['user']['id'];

$sql = "INSERT INTO mensagens (mensagem	, id_usuario) VALUES ('$message', '$userId')";
$result = mysqli_query($conn, $sql);

if ($result) {
	header('Location: ../pages/messagens.php?sucesso=true');
} else {
	echo "Erro ao enviar mensagem";
}
