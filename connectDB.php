<?php

$server = "127.0.0.1";
$user = "root";
$password = "";
$database = "miniprojeto";

$conn = new mysqli($server, $user, $password, $database);

if($conn->connect_error) {
    die("Connection failed. Error: " . $conn->connect_error);
}

?>