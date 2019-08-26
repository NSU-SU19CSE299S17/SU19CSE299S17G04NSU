<?php session_start(); ?> <!-- starting session -->
<?php require 'function.php'; ?> <!-- Calling  pre-built function -->
<?php ob_start(); ?>  <!--  Starting buffer output -->

<?php

   $db=db_connect();


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--sweetalert lib-->
	<script src="assets/js/sweetalert.min.js"></script>
	<link rel="stylesheet" href="assets/css/sweetalert.min.css">


  <link rel="stylesheet" href="css/signupstyle.css">
  </head>
  <body>
    <h1 style="text-align: center; padding-TOP:10px;">Club SignUp</h1>

<section>
  <div class="container">
  <span>Create Account</span>
  <form action="register.php" method="post">
    <label for="Email">NSU Email
      <input type="text" name="email"></label>
    <label for="NSU-ID">NSU ID
      <input type="text" name="nsu_id"></label>
     <label for="Username">Name
       <input type="text" name="name"></label>
    <label for="Password">Password
      <input type="password" name="password"></label>
      <button type="submit" class="btn btn-success" name="submit">Sign Up</button>
    <a href="login.php">I already have an account</a>
  </form>

</div>
</section>
<?php
  if (isset($_POST['submit'])) {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $nsu_id=$_POST['nsu_id'];
    $root=1;
    $sql="INSERT INTO admin VALUES (NULL,'$email','$password',$root,'$name',$nsu_id)";
    $sql_result=mysqli_query($db,$sql);
    if (!$sql_result) {
    ?><script>swal("Wrong Info","Registration Error", "error");</script> <?php
    }
    else{
      ?><script>swal("Success","Registration Successfull", "success");</script> <?php
    }
  }
 ?>


 <!--===============================================================================================-->
 	<script src="register/vendor/jquery/jquery-3.2.1.min.js"></script>
 <!--===============================================================================================-->
 	<script src="register/vendor/animsition/js/animsition.min.js"></script>
 <!--===============================================================================================-->
 	<script src="register/vendor/bootstrap/js/popper.js"></script>
 	<script src="register/vendor/bootstrap/js/bootstrap.min.js"></script>
 <!--===============================================================================================-->
 	<script src="register/vendor/select2/select2.min.js"></script>
 <!--===============================================================================================-->
 	<script src="register/vendor/daterangepicker/moment.min.js"></script>
 	<script src="register/vendor/daterangepicker/daterangepicker.js"></script>
 <!--===============================================================================================-->
 	<script src="register/vendor/countdowntime/countdowntime.js"></script>
 <!--===============================================================================================-->
 	<script src="register/js/main.js"></script>

  </body>
</html>
