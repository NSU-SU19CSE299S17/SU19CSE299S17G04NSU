<?php session_start(); ?> <!-- starting session -->
<?php require '../function.php'; ?> <!-- Calling  pre-built function -->
<?php ob_start(); ?>  <!--  Starting buffer output -->

<?php

   $db=db_connect();

   $root=$_SESSION['dorypos_root'];
 ?>
<?php include('header.php') ?>




<div class="content ">
  <h2 class="text-center">Our Member</h2>
  <div class="row">

<?php
  $events="SELECT * FROM user where club_id=$root";
  $event_result=mysqli_query($db,$events);
  if (mysqli_num_rows($event_result)>0) {
    while ($event_record=mysqli_fetch_assoc($event_result)) {
      ?>
      <div class="col-md-2">

        <div class="card text-center" >
          <img class="card-img-top" src="upload/1.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title"><?php echo $event_record['name']; ?></h4>
            <p class="card-text"><?php echo $event_record['email']; ?></p>
            <p class="card-text"><?php echo $event_record['nsu_id']; ?></p>
          </div>
        </div>

      </div>

      <?php
    }
  }

 ?>








        </div>
      </div>


    <?php include('footer.php') ?>
