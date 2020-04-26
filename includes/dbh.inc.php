<?php

/* opretter variabler til at oprette forbindelse til databasen */
$servername = "localhost";
$dbUsername = "root";
$dbPassword ="!KwC*y^F9kaC!dHw";
$dbName = "loginsystem";

/* variabel man kan referere til for at oprette forbindelse */
$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

/* fejl besked hvis den af en eller anden grund ikke kan oprette forbindelse til serveren */
if (!$conn) {
    die("Kunne ikke forbinde til database: ".mysqli_connect_error());
}