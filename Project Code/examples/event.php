<?php session_start(); ?> <!-- starting session -->
<?php require '../function.php'; ?> <!-- Calling  pre-built function -->
<?php ob_start(); ?>  <!--  Starting buffer output -->

<?php

   $db=db_connect();


 ?>
<?php include('header.php') ?>




<div class="content ">
  <h2 class="text-center">Club Events</h2>
  <div class="row">

<?php
  $events="SELECT * FROM event";
  $event_result=mysqli_query($db,$events);
  if (mysqli_num_rows($event_result)>0) {
    while ($event_record=mysqli_fetch_assoc($event_result)) {
      ?>
      <div class="col-md-3">

        <div class="card card-style" >
          <img class="card-img-top event-data" src="upload/<?php echo $event_record['photo']; ?>" alt="Card image cap">
          <div class="card-body">
            <div class="title-card">
              <h4 class="card-title"><?php echo $event_record['title'];?></h4>
            </div>

            <div class="card-inner-text">
              <p class="card-text"><?php echo $event_record['description']; ?></p>
            </div>

            <a href="inner.php?entry=true&id=<?php echo $event_record['event_id']; ?>" class="btn btn-primary" style="margin-top:25px;">View Events</a>
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
