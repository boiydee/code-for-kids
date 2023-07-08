<?php

$servername = "devweb2022.cis.strath.ac.uk";
$username = "rtb22142";
$password = "Oogh0euJ5idu";
$dbname = "rtb22142";

$connection = new mysqli($servername, $username, $password, $dbname);

if($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>