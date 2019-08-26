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

    $sql="DELETE FROM request WHERE id=$id";
    $sql_result=mysqli_query($db,$sql);
    header('Location: request.php');

  ?>
