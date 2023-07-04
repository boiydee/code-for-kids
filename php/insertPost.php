<?php

include "connect.php";

$username = empty($_GET['user']) ? 'cfkadmin' : $_GET['user'];
$sql = $connection->prepare("INSERT INTO `adminpostmanager`(`POST_NAME`, `CREATED_BY`, `POST_CREATED_TS`) VALUES (?, ?, CURRENT_TIMESTAMP)");
$sql->bind_param("ss", $_GET['post'], $username );



if($sql->execute()) {
    echo "<script>alert('Post successfully created.');window.location.replace('../admin.php');</script>";
}
else{
    echo "<script>alert('Post could not be created.');window.location.replace('../admin.php');</script>";
}

$sql->close();
$connection->close();

?>