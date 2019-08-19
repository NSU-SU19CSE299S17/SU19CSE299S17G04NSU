<?php require 'function.php'; ?>
<?php

   $db=db_connect();
   // checking session validation


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $sql="SELECT * from student where id=1";
    $sql_run=mysqli_query($db,$sql);
    // if (!$sql_run) {
    //   echo "mmmmmmm";
    // }
    if (mysqli_num_rows($sql_run)>0) {
       $sql_run1=mysqli_fetch_assoc($sql_run)

    ?>
    <form class="" action="edit.php" method="post">
      <input type="text" name="fname" value="<?php echo $sql_run1['first_name']; ?>" placeholder=""> <br>
      <input type="text" name="lname" value="<?php echo $sql_run1['last_name']; ?>" placeholder=""> <br>
      <input type="submit" name="save1" value="submit"> <br>
      <!-- <button type="button" name="button">Submit</button> -->

    </form>
    <?php

      if(isset($_POST['save1']) ){
        echo "button pressed";

      if (empty($_POST['fname']) ) {
        echo "Please fillout correctly";
      }
      else{
        $first=$_POST['fname'];
        $last=$_POST['lname'];
        $sql = "UPDATE student
        SET first_name='$first', last_name='$last'
        WHERE id=1 ";
        if (!$sql) {
          echo "mara kha";
        }

        if (mysqli_query($db, $sql)) {
          echo "New record created successfully";
        }
        else {
          echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }

      }

      }



}
     ?>

  </body>
</html>
