<?php
require "connection.php";

$sql = "SELECT * FROM post";
$result = mysqli_query($conn, $sql);
$posts_no_utf8 = mysqli_fetch_all($result, MYSQLI_ASSOC);
$posts = convert_array_to_utf8($posts_no_utf8);
