<?php
require "connection.php";

$sql = "SELECT * FROM quiz";
$result = mysqli_query($conn, $sql);
$Quizes = mysqli_fetch_all($result, MYSQLI_ASSOC);
