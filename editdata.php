<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include_once 'connection.php';
    include_once 'headerfiles.html';
    ?>
</head>
<body>
<?php
include_once 'header.php';
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $sql = "select * from people where Name='$name'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
} else {
    header("Location:show_people.php");
}
?>
<div class="container">
    <div class="col-sm-12">
        <h3 class="text-center">Edit Data</h3>
    </div>
    <form action="updatedata.php" method="post" enctype="multipart/form-data">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" required name="name" id="name" value="<?php echo $row['Name'] ?>"
                               class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="state">State</label>
                        <input type="text" required name="state" value="<?php echo $row['State'] ?>" id="state"
                               class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="salary">Salary</label>
                        <input type="number" required value="<?php echo $row['Salary'] ?>" min="0" name="salary"
                               id="salary" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="grade">Grade</label>
                        <input type="text" required name="grade" id="grade" value="<?php echo $row['Grade'] ?>"
                               class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="room">Room</label>
                        <input type="text" required name="room" value="<?php echo $row['Room'] ?>" id="Room"
                               class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="tel">Tel:</label>
                        <input type="tel" value="<?php echo $row['Telnum'] ?>" required name="tel" id="tel"
                               class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo:</label>
                        <input type="file" name="photo" id="photo" class="form-control">
                    </div>
                    <div class="form-group">
                        <img src="images/<?php echo $row['Picture'] ?>" style="width: 200px;height: 140px"
                             alt="Photo Unavailable">
                    </div>
                    <div class="form-group">
                        <label for="keywords">Keywords</label>
                        <textarea name="keywords" required id="keywords" class="form-control"
                                  cols="3"><?php echo $row['Keywords'] ?></textarea>
                    </div>
                </div>
            </div>
            <div class="row justify-content-around">
                <button type="submit" class="btn btn-dark">Update Data</button>
            </div>
        </div>
    </form>
</div>
<?php
include_once 'footer.php';
?>
</body>
</html>
