<?php
$server_url = $_SERVER['SERVER_NAME'];
$server = "localhost";
$user = "root";
$pass = "";
$db = "artplace";

if ($server_url !== 'localhost') {
	$servidor = 'sql305.epizy.com';
	$usuario = 'epiz_32746769';
	$senha = 't9VjpQ9h2a';
	$banco = 'epiz_32746769_quiz';
}

$conn = mysqli_connect($server, $user, $pass, $db);
