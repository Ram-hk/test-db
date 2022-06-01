<?php
include "db_config.php";
$id = $_GET['id'];
$sql = "DELETE FROM `student_test` WHERE `id`='$id'";
$result = mysqli_query($conn,$sql);
if ($result) {
    header('location: index.php?msg=data deleted successfull');
}

?>