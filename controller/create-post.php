<?php
require_once (__DIR__ . "/../model/config.php");

$connection = new mysql($host, $username, $password, $database);

$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input (INPUT_POST, "post", FILTER_SANITIZE_STRING);

$query = $connection->query("INSERT INTO posts, SET title = '$title', post = '$post'");

if($query) {
    echo "<p>Successfuly inserted post: $title</p>";
}
else {
    echo "<p>$connection->error</p>";
}

$connection->close();