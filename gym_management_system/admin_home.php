<?php
    include('admin.php');


    $sql1="SELECT count(*) from trainee";
    $result = mysqli_query($db,$sql1);
    $row= mysqli_fetch_assoc($result);
    $trainee_count=$row['count(*)'];


    $sql2="SELECT count(*) from trainer";
    $result1 = mysqli_query($db,$sql2);
    $row= mysqli_fetch_assoc($result1);
    $trainer_count=$row['count(*)'];
    $total=$trainee_count+$trainer_count;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Admin</title>
        <link rel="stylesheet" href="stylesheet/admin.css">

    </head>
    <body>

        <div class=active>
        <?php
            echo $total;?>
            <br>
            ACTIVE MEMBERS
        </div>

        <div class =trainer>
            <?php
                echo $trainer_count;?>
                <br>
                TRAINERS
            </div>

            <div class =trainee>
                <?php
                    echo $trainee_count;?>
                    <br>
                    TRAINEES
                </div>



    </body>
    </html>
