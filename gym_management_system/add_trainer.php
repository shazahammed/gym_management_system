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
            $mysalary = mysqli_real_escape_string($db,$_POST['salary']);

            $sql="INSERT INTO trainer values('$myusername','$mypassword','$myname','$myphone','$mysalary')";
            $result = mysqli_query($db,$sql) ;
            if($result){
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
                <form class=add_trainer  method="POST">
                    <h1> ADD TRAINER </h1>
                    <input type="text" name="username" placeholder="Enter User ID" required>
                    <input type="password" name="password" placeholder="Enter Password" required>
                    <input type="text" name="name" placeholder="Enter Name" required>
                    <input type="text" name="phone" placeholder="Enter Phone" required>
                    <input type="text" name="salary" placeholder="Enter Salary" required>
                    <br>
                    <input type="submit" value="Add">
                    <input type="reset"value="Reset">





    </div>

    <script>
    if ('<?php echo $flag ?>'==1){
        alert("TRAINER DATA ENTERED SUCCESSFULLY");
    }else{
        alert("THERE WAS AN UNEXPECTED ERROR");
    }
    </script>

    </body>
    </html>
