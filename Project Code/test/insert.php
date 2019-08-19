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
    <form class="" action="insert.php" method="post">
      <input type="text" name="fname" value="" placeholder="Insert name"> <br>
      <input type="text" name="lname" value="" placeholder="Insert last name"> <br>
      <input type="submit" name="save1" value="submit"> <br>
      <!-- <button type="button" name="save1">Submit</button> -->

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
        $sql = "INSERT INTO student (first_name, last_name)
        VALUES ('$first', '$last')";

        if (mysqli_query($db, $sql)) {
          echo "New record created successfully";
        }
        else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

      }

      }

     ?>

  </body>
</html>
