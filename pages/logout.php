<?php
session_start();
if (isset($_SESSION['user'])) {
	session_destroy();
	echo "<script>window.location.href = '../index.php'</script>";
} else {
	echo "<script>alert('Você não está logado!')</script>";
	echo "<script>window.location.href = '../index.php'</script>";
}
