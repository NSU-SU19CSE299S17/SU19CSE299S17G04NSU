<?php session_start(); ?> <!-- starting session -->
 <?php require '../function.php'; ?> <!-- Calling  pre-built function -->
<?php ob_start(); ?>  <!--  Starting buffer output -->



<?php

   $db=db_connect();

   // checking previous session & cookie
   if (!isset($_SESSION['dorypos_admin']) && isset($_COOKIE['userlog'])  ) {
   header('Location: event.php');

   }

 ?>
 <?php include('header.php') ?>

<div class="content">
  <h2 class="text-center"> Create Events</h2>
  <div class="row">
    <div class="col-md-12">

      <div class="card">
        <form  action="create.php" style="padding:50px;" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input name="title" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Title" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <textarea name="dercription" class="form-control" placeholder="Update your events description" rows="3" required></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Event Starting Date</label>
            <input name="date" type="date" class="form-control" aria-describedby="emailHelp" placeholder="Enter Date" name="date" required>
          </div>

          <div class="form-group" style="display:inline-block" >
            <button  class="btn btn-alert" value="Choose File">Upload Event photo
              <input type="file" class="form-control-file" name="file" required>
            </button>

          </div> <br>

          <button type="submit" class="btn btn-primary" name="login_submit">Submit</button>
        </form>
      </div>

    </div>

      <?php

      if (isset($_POST['login_submit']))  {

        $event_title = $_POST['title'];
        $event_discription = $_POST['dercription'];
        $event_date = $_POST['date'];
        $create_date = date("Y/m/d");
        $root = 8;
        // $_SESSION['dorypos_root'];

        $file_name = $_FILES['file']['name'];
        $file_tem_loc = $_FILES['file']['tmp_name'];
        $file_store = "upload/".$file_name;
        move_uploaded_file($file_tem_loc, $file_store);
        $sql="INSERT INTO event VALUES (NULL, '$event_title','$event_discription','$file_name','$create_date','$event_date',$root)";
        $sql_result=mysqli_query($db,$sql);
        if (!$sql_result) {
        ?><script>swal("Wrong Info","Event Create Error", "error");</script> <?php
        }
        else{
          ?><script>swal("Success","Event Create Successfull", "success");</script> <?php
        }



      }
      ?>



  </div>
</div>


<?php include('footer.php') ?>
