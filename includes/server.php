<?php

// connect to database

// Local DB - Xampp
// $db = mysqli_connect('localhost', 'root', '', 'dreamdev');

// Production DB - Heroku

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$dbname = substr($url["path"], 1);

$db = new mysqli($server, $username, $password, $dbname);

?>
