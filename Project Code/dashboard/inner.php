<?php session_start(); ?> <!-- starting session -->
<?php require '../function.php'; ?> <!-- Calling  pre-built function -->

<?php

   $db=db_connect();
   $id=$_GET['id'];

 ?>
<?php include('header.php') ?>

<?php
$events="SELECT * FROM event where event_id=$id";
$event_result=mysqli_query($db,$events);

  $event_record=mysqli_fetch_assoc($event_result);

 ?>

<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <h4 align="center" >Event Information</h4>
        <form style="padding:50px" method="POST" action="inner.php?id=<?php echo $id; ?>">
          <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title" value="<?php echo $event_record['title']; ?>">
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





        </form>
        <?php
          if (isset($_POST['update'])) {

            $title=$_POST['title'];
            $description=$_POST['description'];

            $sql="UPDATE event SET title='$title', description='$description' WHERE event_id=$id";
            $sql_result=mysqli_query($db,$sql);
            if (!$sql_result) {
            ?><script>swal("Wrong Info","Registration Error", "error");</script> <?php
            }
            else{
              ?><script>swal("Success","Update Successfull", "success");</script> <?php
            }
          }
         ?>
        <?php
          if (isset($_POST['delete'])) {

            $sql="DELETE FROM event WHERE event_id=$id";
            $sql_result=mysqli_query($db,$sql);
            if (!$sql_result) {
            ?><script>swal("Wrong Info","Delete Error", "error");</script> <?php
            }
            else{
              ?><script>swal("Success","Delete Successfull", "success");</script> <?php
            }
          }
         ?>
      </div>
    </div>
  </div>
</div>





<?php include('footer.php') ?>
