<?php
$servername = "localhost";
$dbUsername = "root";
$dbPassword ="!KwC*y^F9kaC!dHw";
$dbName = "loginsystem";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Kunne ikke forbinde til database: ".mysqli_connect_error());
}