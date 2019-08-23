<?php session_start(); ?> <!-- starting session -->
<?php require 'function.php'; ?> <!-- Calling  pre-built function -->
<?php ob_start(); ?>  <!--  Starting buffer output -->
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


  <link rel="stylesheet" href="css/signinstyle.css">
  </head>
  <body>
    <!-- <h1 style="text-align: center; padding-TOP:50px;">YES Club Sign in</h1> -->

<section>

  <div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <form class="login100-form validate-form" method="post" action="login.php">
        <span class="login100-form-title p-b-26">
           Club login
        </span>
        <span class="login100-form-title p-b-48">
          <i class="zmdi zmdi-font"></i>
        </span>

        <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
          <input class="input100" type="text" name="email_" placeholder="Enter your email ...">
          <span class="focus-input100" ></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Enter password">
          <span class="btn-show-pass">
            <i class="zmdi zmdi-eye"></i>
          </span>
          <input class="input100" type="password" name="pass_" placeholder="Enter your password ...">
          <span class="focus-input100" ></span>
        </div>

        <div class="container-login100-form-btn">
          <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button class="login100-form-btn" type="submit" name="login_submit">
              Login
            </button>
          </div>
        </div>

        <div class="text-center p-t-115">
          <span class="txt1">
            Don’t have an account?
          </span>

          <a class="txt2" href="#">
            Sign Up
          </a>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- _______________________php login_____________________ -->

		<?php
				$db=db_connect();

				// checking previous session & cookie
				if (isset($_SESSION['dorypos_admin']) && isset($_COOKIE['userlog'])  ) {
		    header('Location: dashboard.php');

		    }

			// clicking login button
			if (isset($_POST['login_submit'])) {
        echo "hoise";
				if (empty($_POST['email_']) || empty($_POST['pass_'])) {

					$error="Invalid email or password !" ?>
					<script>swal("Opss.....","<?php echo $error; ?>", "error");</script> <?php
				}

			else {


				// define user info
				$email=$_POST['email_'];
				$password=$_POST['pass_'];

				// project injection for ssl attack
				$email=stripslashes($email);
				$password=stripslashes($password);
				$email=mysqli_real_escape_string($db,$email);
				$password=mysqli_real_escape_string($db,$password);

				$user=mysqli_query($db,"SELECT * FROM admin WHERE email='$email'");

				if (mysqli_num_rows($user)==1) {
					//got login acces
					$record=mysqli_fetch_assoc($user);
					 if ($record['password']==$password) {
						 // creating session
  					 $_SESSION['dorypos_admin']=$record['id'];
  					 $_SESSION['dorypos_admin_name']=$record['name'];
  					 $_SESSION['dorypos_root']=$record['root'];
						  // cookie  define
							$c_name=$record['name'];
							$cookie_name='userlog';
							if ($_SESSION['dorypos_root']==FALSE) {
							setcookie($cookie_name, $c_name, time()+(60*60*24));
							}
							else {
								setcookie($cookie_name, $c_name, time()+(60*60*24));
							}

							header('Location: dashboard.php');
					 }
					 else {
					 ?> <script>swal("Opss..","Invalid email or password!", "error");</script> <?php
					 }

				}
				else {
					$error="invalid username or password";
					?> <script>swal("Ops...","Invalid email or password!", "error");</script> <?php
				}

			}
		}
    else {
      echo "hoy nai";
    }


		?>


<div id="dropDownSelect1"></div>

</section>

<script src="../../ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/scripts.js"></script>
  </body>
</html>
