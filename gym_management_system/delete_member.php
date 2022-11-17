<?php
    include('admin.php');



    

    if($_SERVER["REQUEST_METHOD"] == "POST") {

            $flag1=0;

            $myuserid = mysqli_real_escape_string($db,$_POST['username']);
            $sq=" SELECT * FROM trainer T, trainee M where T.userid='$myuserid' OR M.userid='$myuserid'";
            $result=mysqli_query($db,$sq);
            if(mysqli_num_rows($result) >= 1){


            if( $_POST['user'] == "Trainer"){
                $sql=" DELETE FROM trainer where userid='$myuserid' ";


                if(mysqli_query($db,$sql)){
                    $flag1=1;
                }
            }
            if( $_POST['user'] == "Trainee"){

                $sql1="DELETE FROM trainee where userid='$myuserid' ";
                if(mysqli_query($db,$sql1)){
                    $flag1=1;
                }
            }
        }
        }
        ?>

        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="utf-8">
                <title>Admin</title>
                <link rel="stylesheet" href="stylesheet/admin.css">

            </head>
            <body>
                <form class="delete"  method="POST">
                Delete
                    <input type="text" name="username" placeholder="Enter User ID">


        <select name="user">
          <option value="Trainer">Trainer</option>
          <option value="Trainee">Trainee</option>
        </select>
                <input type="submit" name="" value="Delete">
            </form>
                    <script>
                    if('<?php echo $flag1; ?>' ==0){
                        alert("USER ID NOT FOUND");
                    }else{
                        alert("DELETED SUCCESSFULY");
                    }
                    </script>
            </body>
        </html>
