<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include_once 'headerfiles.html';
    include_once 'connection.php';
    ?>
</head>
<body>
<?php
include_once 'header.php';
?>
<div class="container">
    <div class="col-sm-12">
        <h3 class="text-danger text-center">.CSV Data</h3>
    </div>
    <div class="table-responsive">
        <?php
        if (isset($_POST['search'])) {
        $search = $_POST['search'];
        $sql = "SELECT * FROM `people` WHERE `Name` LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $k = 0;
        if (mysqli_num_rows($result) > 0) {
            ?>
                <h5 class="text-center">Search results for "<?php echo $search;?>"</h5>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Sr&nbsp;no.</th>
                    <th>Name</th>
                    <th>State</th>
                    <th>Salary</th>
                    <th>Grade</th>
                    <th>Room</th>
                    <th>Tel num</th>
                    <th>Picture</th>
                    <th>Keywords</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    $k++;
                    ?>
                    <tr>
                        <td><?php echo $k; ?></td>
                        <td><?php echo $row["Name"]; ?></td>
                        <td><?php echo $row["State"]; ?></td>
                        <td><?php echo $row["Salary"]; ?></td>
                        <td><?php echo $row["Grade"]; ?></td>
                        <td><?php echo $row["Room"]; ?></td>
                        <td><?php echo $row["Telnum"]; ?></td>
                        <td><img class="img-fluid" style="width: 100px;height: 100px"
                                 src="images/<?php echo $row["Picture"]; ?>" alt=""></td>
                        <td><?php echo $row["Keywords"]; ?></td>
                        <td><a class="text-warning" href="editdata.php?name=<?php echo $row[0]; ?>"><i
                                        class="fa fa-user-edit"></i></a></td>
                        <td><a class="text-danger" onclick="return confirm('Are you sure you want to delete this row')"
                               href="deletedata.php?name=<?php echo $row[0]; ?>"><i
                                        class="fa fa-times"></i></a></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <?php
        } else {
            ?>
            <div class="col-sm-12">
                <br>
                <h5 class="text-center">Oops No data found</h5>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
    if (isset($_GET['er'])) {
        $val = $_GET['er'];
        if ($val == 1) {
            echo '<div class="alert alert-success">
             Data Updated Successfully without Picture  
             <span class="close" data-dismiss="alert">&times;</span>
             </div>';
        } elseif ($val == 2) {
            echo '<div class="alert alert-danger">
            Data updation failed
            <span class="close" data-dismiss="alert">&times;</span>
            </div>';
        } elseif ($val == 3) {
            echo '<div class="alert alert-info">
            Image size must be less than 500 kb...
            <span class="close" data-dismiss="alert">&times;</span>
            </div>';
        } elseif ($val == 4) {
            echo '<div class="alert alert-info">
            Please select jpg or png file...
            <span class="close" data-dismiss="alert">&times;</span>
            </div>';
        } elseif ($val == 5) {
            echo '<div class="alert alert-success">
             Data Updated Successfully with Picture  
             <span class="close" data-dismiss="alert">&times;</span>
             </div>';
        } elseif ($val == 6) {
            echo '<div class="alert alert-success">
             Data deleted Successfully ...  
             <span class="close" data-dismiss="alert">&times;</span>
             </div>';
        } elseif ($val == 7) {
            echo '<div class="alert alert-success">
             Data deletion failed ...  
             <span class="close" data-dismiss="alert">&times;</span>
             </div>';
        }
    }
    ?>

    <?php
    } else {
        header("Location:show_data.php");
    }
    ?>
</div>
<?php
include_once 'footer.php';
?>
</body>
</html>
