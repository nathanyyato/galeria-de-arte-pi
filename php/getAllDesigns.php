<?php
require "connection.php";

$sql = "SELECT * FROM post";
$result = mysqli_query($conn, $sql);
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
