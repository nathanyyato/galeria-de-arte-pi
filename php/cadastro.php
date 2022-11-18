<?php
require('./connection.php');
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';

$hash = md5($password);
if ($email != '' && $password != '' && $name != '') {
	$query = "INSERT INTO usuarios (email, senha, name) VALUES ('$email', '$hash', '$name')";
	$result = mysqli_query($conn, $query);
	if ($result) {
		$id = mysqli_insert_id($conn);
		session_start();
		$_SESSION['user'] = [
			'email' => $email,
			'name' => $name,
			'id' => $id,
		];
		echo "<script>window.location.href = '../index.php'</script>";
	} else {
		echo "<script>alert('Erro ao cadastrar usuário!')</script>";
		echo "<script>window.location.href = '../index.php'</script>";
	}
} else {
	echo "<script>alert('Preencha todos os campos!')</script>";
	echo "<script>window.location.href = '../pages/cadastro.php'</script>";
}
