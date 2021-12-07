<?php
$server = "http://localhost:8080";
$dbh = "localhost";
$dbu = "root";
$dbp = "";
$dbn = "ms-main-source-db";
$PDO = new PDO("mysql:host=$dbh;dbname=$dbn" , $dbu , $dbp);
if (!$PDO) {
    die("Error in load files!\nPlease try again later!");
}
?>