<?php

    $servername = "devweb2022.cis.strath.ac.uk";
    $username = "";
    $password = "";
    $dbname = "";

    $connection = new mysqli($servername, $username, $password, $dbname);

    if($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
?>