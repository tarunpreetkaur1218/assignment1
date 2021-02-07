<?php
include_once "connection.php";
$name = $_POST['name'];
$state = $_POST['state'];
$salary = $_POST['salary'];
$grade = $_POST['grade'];
$room = $_POST['room'];
$tel = $_POST['tel'];
$keywords = $_POST['keywords'];
$photo = $_FILES["photo"]["tmp_name"];
$path = '';
$error = "";
$ext = "";
if ($photo != "") {
    $filename = $_FILES["photo"]["name"];
    $ext = pathinfo(strtolower($filename), PATHINFO_EXTENSION);
    if ($ext != "jpg" && $ext != "png") {
//        if ($ext != "jpg" && $ext != "JPG" && $ext != "png" && $ext != "PNG") {
        header("location:show_data.php?er=4");
//        $error = "Please select jpg or png file...";
    } elseif (round($_FILES["photo"]["size"] / 1024) > 500) {
        $error = "Image size must be less than 500 kb";
        header("location:show_data.php?er=3");
    } else {
        $path = "images/$filename";
        move_uploaded_file($photo, $path);
        $sql = "UPDATE `people` SET `State`='$state',`Salary`='$salary',`Grade`='$grade',`Room`='$room',`Telnum`='$tel',`Picture`='$filename',`Keywords`='$keywords' WHERE `Name`='$name'";
        if (mysqli_query($conn, $sql)) {
            header("Location:show_data.php?er=5");
        } else {
            header("Location:show_data.php?er=2");
        }
    }
} else {
    $sql = "UPDATE `people` SET `State`='$state',`Salary`='$salary',`Grade`='$grade',`Room`='$room',`Telnum`='$tel',`Keywords`='$keywords' WHERE `Name`='$name'";
    if (mysqli_query($conn, $sql)) {
        header("Location:show_data.php?er=1");
    } else {
        header("Location:show_data.php?er=2");
    }
}
