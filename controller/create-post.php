<?php
require (__DIR__ . "/../model/config.php");



$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");

if($query){
    echo "<p>Succesfuly inserted post: $title</p>";
}else{
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}
echo "<form method='link' action='../index.php'>
<input type='submit' value='Back'>
</form>";

