<?php require 'function.php'; ?>
<?php

   $db=db_connect();
   // checking session validation


 ?>
 <?php
 $sql="SELECT * from student ";
 $sql_run=mysqli_query($db,$sql);
 if ($sql_run) {
   echo " data aise";
 }

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border="1px">
      <thead>
        <th>id</th>
        <th>First name</th>
        <th>Last Name</th>
      </thead>
      <tbody>
      <tr>
        <?php
        if (mysqli_num_rows($sql_run)>0) {
          while ($sql_run1=mysqli_fetch_assoc($sql_run)){


         ?>
         <tr>
         <td><?php echo $sql_run1['id']; ?></td>
        <td><?php echo $sql_run1['first_name']; ?></td>
        <td><?php echo $sql_run1['last_name']; ?></td>
      </tr>

        <?php
      }
      }
         ?>
      </tr>
      </tbody>
    </table>

  </body>
</html>
