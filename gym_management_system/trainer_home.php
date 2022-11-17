<?php

    include('trainer.php');
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Trainer</title>
        <link rel="stylesheet" href="stylesheet/trainer.css">

    </head>
    <body>
        <div class=numbers>
            <br><br>YOU HAVE<br>
<?php


$myusername=$_SESSION['username'];
$sql = " SELECT count(*) FROM trainee WHERE trained_by = '$myusername' GROUP BY trained_by";
$result = mysqli_query($db,$sql) ;
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
echo $row['count(*)'];


 ?>
 <br>TRAINEES


    </div>
    </body>
    </html>
