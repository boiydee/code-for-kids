<?php


include "connect.php";

$updateUser = $connection->prepare("UPDATE `adminpostmanager` SET `CREATED_BY` = ?, `POST_CREATED_TS`= CURRENT_TIMESTAMP WHERE `adminpostmanager` . `POST_NO` = ? ");
$updateUser->bind_param("si", $_GET['newUser'], $_GET['postRows']);

$updatePostName = $connection->prepare("UPDATE `adminpostmanager` SET `POST_NAME` = ?, `POST_CREATED_TS`= CURRENT_TIMESTAMP WHERE `adminpostmanager` . `POST_NO` = ? ");
$updatePostName->bind_param("si", $_GET['newPost'], $_GET['postRows']);


if(!empty($_GET['newUser'])){
    $updateUser->execute();
    echo "<script>alert('Admin name successfully updated.');window.location.replace('../admin.php');</script>";
}
else if(!empty($_GET['newPost'])){
    $updatePostName->execute();
    echo "<script>alert('Post name successfully updated.');window.location.replace('../admin.php');</script>";
}
else {
    echo "<script>alert('Post elements could not be updated.');window.location.replace('../admin.php');</script>";
}


$connection->close();
