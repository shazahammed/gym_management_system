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
?>




















<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Admin</title>
        <link rel="stylesheet" href="stylesheet/admin.css">

    </head>
    <body>
        <div class="logout">
        <input  type="button" name="" value="LOGOUT" onclick="window.location.href='login.php';">
    </div>

        <div class= sidebar>
        <a href="admin_home.php">HOME</a>
            <br><br>
      <input  type="button" name="" value="View Trainers" onclick="window.location.href='all_trainer.php';">

      <input type="button" name="" value="Add Trainer" onclick="window.location.href='add_trainer.php';">
      <br>
      <input  type="button" name="" value="View Trainees" onclick="window.location.href='all_trainee.php';">

      <input type="button" name="" value="Add Trainee" onclick="window.location.href='add_trainee.php';">
      <br>
      <input type="button" name="" value="Delete Member" onclick="window.location.href='delete_member.php';">

    </div>

    </body>
    </html>
