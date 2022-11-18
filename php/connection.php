<?php
$server_url = $_SERVER['SERVER_NAME'];
$server = "localhost";
$user = "root";
$pass = "";
$db = "artplace";

if ($server_url !== 'localhost') {
	$server = 'sql305.epizy.com';
	$user = 'epiz_32746769';
	$pass = 't9VjpQ9h2a';
	$db = 'epiz_32746769_quiz';
}

$conn = mysqli_connect($server, $user, $pass, $db);
