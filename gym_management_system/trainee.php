<?php
// define database related variables
  $db_name = 'project_db';
  $host = 'localhost';
  $user = 'root';
  $password = '';


   $db = mysqli_connect($host, $user, $password, $db_name);
   if(mysqli_connect_errno()) {
       die("Failed to connect with MySQL: ". mysqli_connect_error());
   }

session_start();
$myusername=$_SESSION['username'];
$mypassword=$_SESSION['password'];

$sql = " SELECT * FROM trainee WHERE userid = '$myusername' and password = '$mypassword'";
$result = mysqli_query($db,$sql) ;
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$trainerid=$row['trained_by'];







 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Member</title>
        <link rel="stylesheet" href="stylesheet/trainee.css">

    </head>
    <body>
        <header>
            <h1>Welcome Back <?php echo $row['name'] ?>! </h1>
        </header>
        <br>

<center>
        <?php
        $sql1=" SELECT name,phone FROM trainer WHERE userid = '$trainerid' ";
        $result1 = mysqli_query($db,$sql1) ;
        $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
        echo " TRAINER NAME : " . $row1['name'] . "&nbsp &nbsp &nbsp &nbsp &nbsp TRAINER PHONE : " . $row1['phone'];
         ?>
     </center>
     <br>
        <div class=center>
            <img src="stylesheet/images/left.jpg" width="100%" height="60%">
<div class=left>
    <br>
            <?php
            $sql2=" SELECT weight,fat FROM trainer_trainee WHERE userid = '$myusername' ";
            $result2 = mysqli_query($db,$sql2) ;
            $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
            echo "<br><br>Your current weight : <br>" . $row2['weight'];
            echo "<br><br><br>Your body fat content : <br>" . $row2['fat'];
            ?>
        </div>
        </div>
        <div class=center>
            <center>
                <br>
                <br><br><br>
            <?php

            $day=date("l");
            switch($day){
                case "Monday" : echo "DAY : " . $day;
                                echo "<br><br><br><br><br><br><br>Focus on your<br>lats and abs<br>today<br><br><br><br>Have a good workout session<br>";
                break;
                case "Tuesday" :echo "DAY : " . $day;
                                echo "<br><br><br><br><br><br><br>Focus on your<br>shoulder and abs<br>today<br><br><br><br>Have a good workout session<br>";
                break;
                case "Wednesday" : echo "DAY : " . $day;
                                    echo "<br><br><br><br><br><br><br>Focus on your<br>biceps and abs<br>today<br><br><br><br>Have a good workout session<br>";
                break;
                case "Thursday" : echo "DAY : " . $day;
                                    echo "<br><br><br><br><br><br><br>Focus on your<br>thigh and abs<br>today<br><br><br><br>Have a good workout session<br>";
                break;
                case "Friday" : echo "DAY : " . $day;
                                echo "<br><br><br><br><br><br><br>Focus on your<br>chest and biceps<br>today<br><br><br><br>Have a good workout session<br>";
                break;
                case "Saturday" : echo "DAY : " . $day;
                                    echo "<br><br><br><br><br><br><br>Focus on your<br>tricep and abs<br>today<br><br><br><br>Have a good workout session<br>";
                break;
                case "Sunday" : echo "DAY : " . $day;
                                echo "<br><br><br><br><br><br><br>You did good this week<br><br><br><br>Reward yourself with a <br><bold>burger</bold><br> today<br>";
                break;

            }
 ?>
 <br><br>
 <div class="logout">
 <input  type="button" name="" value="LOGOUT" onclick="window.location.href='login.php';">
 <br><br><br><br><br><br>
 <br>
</div>
</center>
</div>
        <div class=center>

                <img src="stylesheet/images/right.png" width="100%" height="60%">
                <div class=right><br><br>
<br><br><br>                    </div>
    </div>

    </body>
    </html>
