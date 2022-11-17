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
$error="";




if($_SERVER["REQUEST_METHOD"] == "POST") {



   if( $_POST['user'] == "Admin"){
        $myusername = mysqli_real_escape_string($db,$_POST['username']);
        $_SESSION['username']=$myusername;
        $mypassword = mysqli_real_escape_string($db,$_POST['psw']);

        $sql = " SELECT * from admin where username = '$myusername' and password = '$mypassword'";
        $result = mysqli_query($db,$sql) ;//or die( mysqli_error($db));
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);


        if($count == 1) {
           header("location: admin_home.php");
        }else {
           $error = "Invalid Username or Password";


        }
      }

    elseif( $_POST['user'] == "Trainer"){
        $myusername = mysqli_real_escape_string($db,$_POST['username']);
        $_SESSION['username']=$myusername;
        $mypassword = mysqli_real_escape_string($db,$_POST['psw']);
        $_SESSION['password']=$mypassword;

        $sql = " SELECT * FROM trainer WHERE userid = '$myusername' and password = '$mypassword'";
        $result = mysqli_query($db,$sql) ;//or die( mysqli_error($db));
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1) {
           header("location: trainer_home.php");
        }else {
           $error = "Invalid Username or Password";
        }
      }



    elseif( $_POST['user'] == "Trainee")
      {
        $myusername = mysqli_real_escape_string($db,$_POST['username']);
        $_SESSION['username']=$myusername;
        $mypassword = mysqli_real_escape_string($db,$_POST['psw']);
        $_SESSION['password']=$mypassword;

        $sql = " SELECT * FROM trainee WHERE userid = '$myusername' and password = '$mypassword'";
        $result = mysqli_query($db,$sql) ;
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1) {
          header("location: trainee.php");
        }else {
           $error = "Invalid Username or Password";
        }
     }
  }


?>







<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Interactive login form</title>
        <link rel="stylesheet" href="stylesheet/login.css">

    </head>
    <body>
        <form class="box"  method="POST">
            <h1> LOGIN </h1>
            <input type="text" name="username" placeholder="Enter Username" id = "username" required>
            <input type="password" name="psw" placeholder="Enter Password" id = "password" required>


<select name="user">
    <option value="Null">Select Position</option>
  <option value="Admin">Admin</option>
  <option value="Trainer">Trainer</option>
  <option value="Trainee">Member</option>
</select>
            <input type="submit" name="" value="Login">
            <script>
            if("<?php echo $error; ?>" != ""){
                alert("<?php echo $error; ?>");
            }
            </script>
    </body>
</html>
