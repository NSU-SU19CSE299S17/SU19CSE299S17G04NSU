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
<?php include('header.php') ?>


<?php
$events="SELECT * FROM user_message where id='{$id}' ";
$event_result=mysqli_query($db,$events);
$count=0;
if (mysqli_num_rows($event_result)>0) {
  while ($event_record=mysqli_fetch_assoc($event_result)) {

 ?>

<div class="content ">
  <div class="row">

    <div class="col-md-12">
      <div class="card">
        <h4 class="text-center">User Messages</h4>
        <div class="" style="    padding: 50px;
    border: 1px solid #d6d5d5;
    margin: 60px 130px;" align="center">
            <p class=""><?php echo $event_record['description']; ?></p>
        </div>

<?php
}
}

 ?>


      </div>
    </div>








  </div>
</div>


<?php include('footer.php') ?>
