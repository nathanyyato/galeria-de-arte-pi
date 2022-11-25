<?php
require "connection.php";

$sql = "SELECT * FROM quiz";
$result = mysqli_query($conn, $sql);
$Quizes = mysqli_fetch_all($result, MYSQLI_ASSOC);
$Quizes = convert_array_to_utf8($Quizes);
