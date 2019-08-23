<?php session_start(); ?> <!-- starting session -->
<?php require '../function.php'; ?> <!-- Calling  pre-built function -->
<?php ob_start(); ?>  <!--  Starting buffer output -->

<?php

   $db=db_connect();
    $event_id=$_GET['id'];


 ?>
<?php include('header.php') ?>

<?php
  $events="SELECT * FROM event where event_id = $event_id";
  $event_result=mysqli_query($db,$events);
  $event_record=mysqli_fetch_assoc($event_result);

      ?>


<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <h4 align="center" >Event Information</h4>
        <form style="padding:50px" method="POST" action="inner.php">
          <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="<?php echo $event_record['title'];?>" aria-describedby="emailHelp" placeholder="Title">
          </div>
          <div class="form-group">
            <textarea name="description" rows="8" cols="80" style="width:100%"><?php echo $event_record['description']; ?></textarea>
          </div>
          <!-- <div class="form-group">
            <label for="exampleInputEmail1">Evenet Starting Date</label>
            <input type="date" class="form-control"  aria-describedby="emailHelp" value="2019/8/5" placeholder="2019/8/5">
          </div> -->






          <button name="update" type="submit" class="btn btn-primary text-center">Update Events</button>
          <button name="delete" type="submit" class="btn btn-danger text-center">Delete Events</button>


          <?php
          if (isset($_POST['update'])) {
          $title=$_POST['title'];
          $description=$_POST['description'];



          $sql="UPDATE event set title='$title' where event_id = $event_id";
          // , description = '$description' where event_id = $event_id"
          $sql_result=mysqli_query($db,$sql);
          if (!$sql_result) {
          ?><script>swal("Wrong Info","Registration Error", "error");</script> <?php
          }
          else{
            ?><script>swal("Success","Registration Successfull", "success");</script> <?php
          }
        }

       ?>


        </form>
      </div>
    </div>
  </div>
</div>





<?php include('footer.php') ?>
