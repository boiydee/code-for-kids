<?php

include "connect.php";
$update = "yes";

$updateBeg1 = $connection->prepare("UPDATE `usercompletiontable` SET `LEVEL_1_COMPLETE` = ? WHERE `EMAIL` = ? ");
$updateBeg1->bind_param("ss", $update, $_POST['email']);

if($updateBeg1->execute()){
    echo "<script>alert('Level progression updated.');window.location.replace('../lessons/HTMLLvl1.html');</script>";
}
else{
    echo "<script>alert('Level progression could not be updated.');window.location.replace('../lessons/HTMLLvl1.html');</script>";
}

$connection->close();

?>