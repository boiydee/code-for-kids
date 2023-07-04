<?php


include "connect.php";


$sql = $connection->prepare("DELETE FROM `adminpostmanager` WHERE `adminpostmanager` . `POST_NO` = ?");
$sql->bind_param("i", $_GET["postRows"]);

if($sql->execute()) {
    echo "<script>alert('Post successfully deleted.');window.location.replace('../admin.php');</script>";
}
else{
    echo "<script>alert('Post could not be deleted.');window.location.replace('../admin.php');</script>";
}

$connection->close();

?>