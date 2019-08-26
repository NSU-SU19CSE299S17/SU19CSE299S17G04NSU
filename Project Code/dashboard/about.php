<?php session_start(); ?> <!-- starting session -->
<?php require '../function.php'; ?> <!-- Calling  pre-built function -->
<?php ob_start(); ?>  <!--  Starting buffer output -->

<?php

   $db=db_connect();

   $root=$_SESSION['dorypos_root'];
 ?>
<?php include('header.php') ?>




<div class="content ">
  <div class="row">

<?php
  $events="SELECT * FROM all_clubs where club_id=$root";
  $event_result=mysqli_query($db,$events);

    $event_record=mysqli_fetch_assoc($event_result);
      ?>
      <div class="col-md-12">
      <div class="card">
        <h4 class="text-center">Club About Information</h4>


          <form style="padding:50px" method="POST" action="about.php">

            <div class="form-group">
              <textarea name="about" rows="8" cols="80" style="width:100%"><?php echo $event_record['about'] ; ?></textarea>
            </div>

            <button name="update" type="submit" class="btn btn-primary text-center">Update About</button>
          </form>

        </div>
      </div>
      <?php
        if (isset($_POST['update'])) {

          $about=$_POST['about'];

          $sql="UPDATE all_clubs SET about='$about' WHERE club_id={$event_record['club_id']}";
          $sql_result=mysqli_query($db,$sql);
          if (!$sql_result) {
          ?><script>swal("Wrong Info","Registration Error", "error");</script> <?php
          }
          else{
            ?><script>swal("Success","Registration Successfull", "success");</script> <?php
          }
        }
       ?>









        </div>
      </div>


    <?php include('footer.php') ?>
