<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["us-cdbr-iron-east-02.cleardb.net"];
$username = $url["b916489ac9ce85"];
$password = $url["c55e02df"];
$dbname = substr($url["path"], 1);

$db = new mysqli($server, $username, $password, $dbname);
?>
