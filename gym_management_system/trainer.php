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



?>










<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Trainer</title>
        <link rel="stylesheet" href="stylesheet/trainer.css">

    </head>

    <body>
        <div class="logout">
        <input  type="button" name="" value="LOGOUT" onclick="window.location.href='login.php';">
    </div>
        <div class= sidebar>
        <a href="trainer_home.php">HOME</a>
            <br><br><br>
      <input  type="button" name="" value="View Trainees" onclick="window.location.href='trainer_view.php';">
      <br><br>
      <input type="button" name="" value="Update Info" onclick="window.location.href='trainer_update.php';">

    </div>

    </body>
    </html>
