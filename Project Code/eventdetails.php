<?php session_start(); ?> <!-- starting session -->
<?php require 'function.php'; ?> <!-- Calling  pre-built function -->
<?php ob_start(); ?>  <!--  Starting buffer output -->

<?php

   $db=db_connect();

$e_id = $_GET['id'];

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  </head>
  <body>

    <?php
      $events="SELECT * FROM event where event_id=$e_id";
      $event_result=mysqli_query($db,$events);

        $event_record=mysqli_fetch_assoc($event_result);
      ?>

    <section class="container">
      <br>
      <h1 style="text-align:center;"><?php echo $event_record['title']; ?></h1>
      <br>
      <img src="dashboard/upload/<?php echo $event_record['photo']; ?>" class="img-thumbnail" alt="Cinque Terre">
      <br><br><br>
      <h5 style="text-align:center;"><?php echo $event_record['description']; ?></h5>
      <br><br>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>
