<?php

// connect to database

// Locally
// $db = mysqli_connect('localhost', 'root', '', 'dreamdev');

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

// Production DB

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$dbname = substr($url["path"], 1);

$db = new mysqli($server, $username, $password, $dbname);

?>
