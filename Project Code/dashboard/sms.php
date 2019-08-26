<?php session_start(); ?>
<!-- starting session -->
<?php require '../function.php'; ?>
<!-- Calling  pre-built function -->
<?php ob_start(); ?>
<!--  Starting buffer output -->

<?php

   $db=db_connect();

   $root=$_SESSION['dorypos_root'];
 ?>
<?php include('header.php') ?>




<div class="content ">
  <div class="row">

    <div class="col-md-12">
      <div class="card">
        <h4 class="text-center">User Messages</h4>
        <div class="" style=" padding:50px;">
          <table class="table" >
            <thead class=" text-primary">
              <tr>
                <th> No. </th>
                <th> Name </th>
                <th> Email </th>
                <th> View Messages </th>
              </tr>
            </thead>
            <tbody>
              <?php
              $events="SELECT * FROM user_message where club_id=$root";
              $event_result=mysqli_query($db,$events);
              $count=0;
              if (mysqli_num_rows($event_result)>0) {
                while ($event_record=mysqli_fetch_assoc($event_result)) {

               ?>
              <tr>
                <td> <?php echo ++$count; ?> </td>
                <td> <?php echo $event_record['name']; ?> </td>
                <td> <?php echo $event_record['email']; ?> </td>
                <td> <a href="viewsms.php?id=<?php echo $event_record['id'];  ?>"  class="btn btn-info">Info</a> </td>
              </tr>
              <?php

            }
          }
               ?>

          </table>
        </div>




      </div>
    </div>








  </div>
</div>


<?php include('footer.php') ?>
