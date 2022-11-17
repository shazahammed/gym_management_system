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
        <th>Salary</th>
        <th>Trainees</th>
        </tr>
            <?php
            $sql = " SELECT T.userid , T.name , T.phone , T.salary ,count(M.userid) as trainee FROM trainer T , trainee M where T.userid=M.trained_by group by trained_by;";
            $result = mysqli_query($db,$sql) ;




    while($row= mysqli_fetch_assoc($result)){
        echo "<tr>";
      echo "<td>" . $row['userid'] . "</td>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['phone'] . "</td>";
      echo "<td>" . $row['salary'] . "</td>";
      echo "<td>" . $row['trainee'] . "</td>";
      echo "</tr>";
      }
    echo "</table>";





     ?>


    </div>

    </body>
    </html>
