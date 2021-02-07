<?php
include_once 'connection.php';
$id = $_GET['name'];
$sql = "delete from people where `Name`='$id'";
if (mysqli_query($conn, $sql)) {
    header("Location:show_data.php?er=6");
} else {
    header("Location:show_data.php?er=7");
}
