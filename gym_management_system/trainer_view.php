<?php

    include('trainer.php');
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
    <th>Name</th>
    <th>Phone</th>
    <th>Plan</th>
    <th>Weight</th>
    <th>Fat</th>
    </tr>
        <?php
        $myusername=$_SESSION['username'];
        $sql = " SELECT M.name, M.phone, T.plan, T.weight, T.fat FROM trainee M, trainer_trainee T WHERE M.userid=T.userid and trained_by = '$myusername' ";
        $result = mysqli_query($db,$sql) ;




while($row= mysqli_fetch_assoc($result)){
    echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['plan'] . "</td>";
  echo "<td>" . $row['weight'] . "</td>";
  echo "<td>" . $row['fat'] . "</td>";
  echo "</tr>";
  }
echo "</table>";





 ?>


</div>

</body>
</html>
