<?php
function db_connect(){
   $connection=mysqli_connect("localhost", "root", "", "wait");
  return $connection;
}
if (!db_connect()) {
    die("Connection failed: " . mysqli_connect_error());
}


 ?>
