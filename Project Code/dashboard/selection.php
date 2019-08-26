<?php session_start(); ?>
<!-- starting session -->
<?php require '../function.php'; ?>
<!-- Calling  pre-built function -->
<?php ob_start(); ?>
<!--  Starting buffer output -->

<?php

   $db=db_connect();

   $root=$_SESSION['dorypos_root'];
   $id=$_GET['id'];
 ?>


 <?php
 $events="SELECT * FROM request where id=$id";
 $event_result=mysqli_query($db,$events);
 $event_record=mysqli_fetch_assoc($event_result);

  // print_r($event_record);
  $name=$event_record['name'];
  $email=$event_record['email'];
  $nsu_id=$event_record['nsu_id'];
  $phone=$event_record['phone'];
  $department=$event_record['department'];
  $cgpa=$event_record['cgpa'];


  $sql="INSERT INTO user VALUES (NULL,'$name','$email','$nsu_id','$phone','$department','$cgpa',$root)";
  $sql_result=mysqli_query($db,$sql);
  if ($sql_result) {
    $sql="DELETE FROM request WHERE id=$id";
    $sql_result=mysqli_query($db,$sql);
    header('Location: request.php');
  }

  ?>
