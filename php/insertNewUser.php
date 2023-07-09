<?php
// Will add user to the usercompletion table after registering their details to website

include "connect.php";

$sql = $connection->prepare("INSERT INTO `usercompletiontable` (`FIRST_NAME`, `LAST_NAME`, `EMAIL`, `BEGINNER_LEVEL_1_COMPLETE`, `BEGINNER_LEVEL_2_COMPLETE`, `BEGINNER_LEVEL_3_COMPLETE`, `BEGINNER_LEVEL_4_COMPLETE`, `BEGINNER_LEVEL_5_COMPLETE`,`BEGINNER_LEVEL_1_COMPLETE`, `Intermediate_LEVEL_2_COMPLETE`, `Intermediate_LEVEL_3_COMPLETE`, `Intermediate_LEVEL_4_COMPLETE`, `Intermediate_LEVEL_5_COMPLETE`) VALUES (?, ?, ?, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No') ");
$sql->bind_param("sss", $_POST['forename'], $_POST['surname'], $_POST['email']);

if ($sql->execute()) {
    echo "<script>alert('Level progression now being tracked by admin.');window.location.replace('../post-registration.html');</script>";
} else {
    echo "<script>alert('User progression could not be added.');window.location.replace('../post-registration.html');</script>";
}

$connection->close();


?>