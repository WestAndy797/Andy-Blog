<?php
require_once (__DIR__ . "/database.php");
session_start();
//making a variable and storing something in it
$host = "localhost";
$username = "root";
$password = "root";
$database = "blog_db";

$nav1 = "active";
$nav2 = "";
$nav3 = "";
$nav4 = "";

$himain = "";

if(!isset($_SESSION["connection"])) {
    $connection = new Database($host, $username, $password, $database);
    $_SESSION["connection"] = $connection;
}