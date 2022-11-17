<?php
    include('admin.php');
    ?>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {

            $flag=0;


            $myusername = mysqli_real_escape_string($db,$_POST['username']);
            $mypassword = mysqli_real_escape_string($db,$_POST['password']);
            $myname = mysqli_real_escape_string($db,$_POST['name']);
            $myphone = mysqli_real_escape_string($db,$_POST['phone']);
            $myfee = mysqli_real_escape_string($db,$_POST['fee']);
            $mytrainer = mysqli_real_escape_string($db,$_POST['trainer']);
            $myweight = mysqli_real_escape_string($db,$_POST['weight']);
            $myfat = mysqli_real_escape_string($db,$_POST['fat']);
            $myplan = mysqli_real_escape_string($db,$_POST['plan']);

            $sql="INSERT INTO trainee values('$myusername','$mypassword','$myname','$myphone','$myfee','$mytrainer')";
            $result = mysqli_query($db,$sql) ;

            $sql1="INSERT INTO trainer_trainee values('$myusername','$myweight','$myfat','$myplan')";
            $result1 = mysqli_query($db,$sql1) ;
            if($result && $result1){
                $flag=1;
            }
        }

     ?>


    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>Trainer</title>
            <link rel="stylesheet" href="stylesheet/admin.css">

        </head>
        <body>
            <div class=add_trainer>
                <form class=add_trainee  method="POST">
                    <h1> ADD TRAINEE </h1>
                    <input type="text" name="username" placeholder="Enter User ID" required>
                    <input type="password" name="password" placeholder="Enter Password" required>
                    <input type="text" name="name" placeholder="Enter Name" required>
                    <input type="text" name="phone" placeholder="Enter Phone" required>
                    <input type="text" name="fee" placeholder="Enter Monthly Fee" required>
                    <input type="text" name="trainer" placeholder="Enter Trainer ID" required>
                    <input type="text" name="weight" placeholder="Enter weight" required>
                    <input type="text" name="fat" placeholder="Enter Fat content" required>
                    <input type="text" name="plan" placeholder="Enter Program Duration" required>
                    <br>
                    <input type="submit" value="Add">
                    <input type="reset"value="Reset">





    </div>

    <script>
    if ('<?php echo $flag ?>'==1){
        alert("TRAINEE DATA ENTERED SUCCESSFULLY");
    }else{
        alert("THERE WAS AN UNEXPECTED ERROR");
    }
    </script>

    </body>
    </html>
