<form class="" action="?" method="post" enctype="multipart/form-data">
  <input type="file" value="" name="file">
  <input type="submit" name="submit" value="submit">
</form>
<?php

  if (isset($_POST['submit'])) {
    $sam = $_FILES['file'];
    print_r($sam);
  }
 ?>



 <?php
   $show_brand="SELECT * FROM photo";
   $show_brand_result=mysqli_query($db,$show_brand);
   if (mysqli_num_rows($show_brand_result)>0) {
     while ($brand_record=mysqli_fetch_assoc($show_brand_result)) {
       ?>
       <tr>
         <img src="upload/<?php echo $brand_record['name']; ?>" ></td>
       </tr>
       <?php
     }
   }

  ?>
