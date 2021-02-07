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
    ?>
</head>
<body>
<?php
include_once 'header.php';
?>
<div class="container">
    <div class="col-sm-12">
        <h3 class="text-danger text-center">Here Import .CSV Data</h3>
        <br><br><br><br><br>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="text-center" style="border-style: dashed">
                    <br>
                    <form method="post" action="importcsvaction.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="file" required class="btn-primary" name="file"/><br/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-success" value="Upload"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <br>
        <br>
        <?php
        if (isset($_GET['er'])) {
            $val = $_GET['er'];
            if ($val == 4) {
                echo '<div class="alert alert-info">
            Please select CSV file only...
            <span class="close" data-dismiss="alert">&times;</span>
            </div>';
            } elseif ($val == 5) {
                echo '<div class="alert alert-success">
             CSV Imported Successfully ...  
             <span class="close" data-dismiss="alert">&times;</span>
             </div>';
            }
        }
        ?>

    </div>
</div>
<div class="fixed-bottom">
    <?php
    include_once 'footer.php';
    ?>
</div>
</body>
</html>
