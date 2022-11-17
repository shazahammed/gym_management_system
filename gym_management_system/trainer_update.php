<?php

    include('trainer.php');
?>
<?php

$myusername=$_SESSION['username'];
$sqlList = " SELECT * FROM trainee where trained_by = '$myusername'";
$listResult = mysqli_query($db,$sqlList);



if($_SERVER["REQUEST_METHOD"] == "POST") {

    $myuserid = mysqli_real_escape_string($db,$_POST['username']);
    $myweight = mysqli_real_escape_string($db,$_POST['weight']);
    $myfat = mysqli_real_escape_string($db,$_POST['fat']);
    $sql = " UPDATE trainer_trainee SET weight='$myweight', fat='$myfat' where userid = '$myuserid'";
    $result = mysqli_query($db,$sql) ;//or die( mysqli_error($db));
    if($result){
        $var=1;
    }
    else{
        $var=0;
    }

}
 ?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Trainer</title>
        <link rel="stylesheet" href="stylesheet/trainer.css">

    </head>
    <body>
        <div class=update>
            <form class="box"  method="POST">
                <h1> UPDATE INFO </h1>


        <select name="username">
	<option value = "Null">Select Trainee</option>
            <?php
                // use a while loop to fetch data
                // from the $all_categories variable
                // and individually display as an option

                while ($users = mysqli_fetch_assoc($listResult)):;
            ?>
                
                <option value="<?php echo $users["userid"];
                    // The value we usually set is the primary key
                ?>">
                <?php echo $users["userid"];
                        // To show the category name to the user
                    ?>

                </option>
            <?php
                endwhile;
                // While loop must be terminated
            ?>
        </select>



                <input type="text" name="weight" placeholder="Enter Weight" required>
                <input type="text" name="fat" placeholder="Enter fat content" required>
                <input type="submit" name="" value="Update">
        </div>
        <script>
        val="<?php echo $var; ?>";
        if (val==1){
            alert ("Update Successful");
        }
        else{
            alert ("Update Unsuccessful");
        }
        </script>
    </body>
    </html>
