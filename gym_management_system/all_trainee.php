<?php
    include('admin.php');
    ?>


    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>Trainer</title>
            <link rel="stylesheet" href="stylesheet/trainer.css">

        </head>
        <body>
            <div class=view>
            <table>
        <tr>
        <th>User ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Monthly Fee</th>
        <th>Plan</th>
        </tr>
            <?php
            $sql = " SELECT T.userid , T.name , T.phone , T.monthly_fee ,M.plan FROM trainee T , trainer_trainee M where T.userid=M.userid;";
            $result = mysqli_query($db,$sql) ;




    while($row= mysqli_fetch_assoc($result)){
        echo "<tr>";
      echo "<td>" . $row['userid'] . "</td>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['phone'] . "</td>";
      echo "<td>" . $row['monthly_fee'] . "</td>";
      echo "<td>" . $row['plan'] . "</td>";
      echo "</tr>";
      }
    echo "</table>";





     ?>


    </div>

    </body>
    </html>
