<?php session_start(); ?> <!-- starting session -->
<?php require 'function.php'; ?> <!-- Calling  pre-built function -->
<?php ob_start(); ?>  <!--  Starting buffer output -->

<?php

   $db=db_connect();


 ?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


  <link rel="stylesheet" href="css/indexstyle.css">


</head>



<body style="background-color:white;">




  <section>
    <!-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark"> -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
      <a class="navbar-brand" href="#">NSU Clubs</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </section>




  <!-- <section style="padding: 1rem 0rem;">
    <h1 style="text-align:center; font-size: 3rem; ">NSU CLUB PRO</h1>
  </section> -->






  <section style="padding-top:55px;">
    <div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="photos/pic01.jpg" alt="NSU Club" width="1100" height="500">
          <div class="carousel-caption">
            <h3>auditorium</h3>
            <p>We had such a great time in auditorium</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="photos/pic02.jpg" alt="NSU" width="1100" height="500">
          <div class="carousel-caption">
            <h3>robot wrestling</h3>
            <p>Thank you, Team M4za1</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="photos/pic03.jpg" alt="Bd in NSU" width="1100" height="500">
          <div class="carousel-caption">
            <h3>NSU APC Club</h3>
            <p>We love the them</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="photos/pic04.jpg" alt="Bd in NSU" width="1100" height="500">
          <div class="carousel-caption">
            <h3>Club fair</h3>
            <p>Club fair is comming soon</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section>


  <section style="height: 5rem">
  </section>

  <section class="container">



    <h2 style="text-align: center; font-size: 3rem;">About</h2>
    <section style="height: 1rem">
    </section>
    <section style="display: block; text-align: center; height:40rem; ">
      <h5 style="padding-top: 100rem solid black; padding-button: 100rem solid black;">
        This is the problem we are trying to solve: Some NSU clubs have different website. There is no login option of their website. And there is no common platform for all clubs, where Student can see upcoming events, running events or get notification/message by their own club authority. Most of them are static website. static website contains information that does not change. It remains the same, or static, for every viewer of the site. But a dynamic website contains information that changes, depending on the viewer, the time of the day, the time zone, the viewer's native language, and other factors. Even most of the clubs don’t have their own website. For the reasons they cannot do any job by their website and no student can get message or notification form the club. Also, club authority has to maintain their club by manual meeting. They don’t have any database to keep their data, student information or event handling power. Nobody cannot know about their events but some of them who are touch with their clubs. So, it is very hard for NSU club members to get notified by their own club. Also hard for NSU club authority to handle the club programs and members. So, we tried to solve this problem through a dynamic web application. This is how our product would solve the problem: Some NSU clubs have different websites but we will open one website for all NSU students. They can login to our website. All club’s members can include their information in the website. they can get messages, do chatting, get events updates, get notifications or any information through our website. Our website will have a database where every data will be stored. We will store all members information, all events information and the information of recruitments. All student can recruit any club via our website. Our website will be a platform where everyone visits and collect all type information. Also, club authority can buy package for their own club. We will have some packages. We will allow few facilities for the free package holder and more facilities for them who buy package from us. We have a signup page where everyone allowed to sign up. And login page for them who are already the member of the club. We frequently update every club event in our page. The top events will be highlight in the top of our pages. Every pro club authority has an option to buy a package from us to highlight their feature in our main page. Our website has different view version for mobile, personal computer, laptop and tablet. The website will also be allowed for large screen display. And we will create a chatroom for club members where everyone could chat with their club members.
      </h5>
    </section>





    <h2 style="text-align: center; font-size: 3rem;">TOP EVENTS</h2>
    <section style="height: 1rem">
    </section>
    <section style="width :100%;">
      <div class="container-fluid">
        <div class="row flex-row flex-nowrap">

          <?php
            $events="SELECT * FROM event";
            $event_result=mysqli_query($db,$events);
            if (mysqli_num_rows($event_result)>0) {
              while ($event_record=mysqli_fetch_assoc($event_result)) {
                ?>

          <div class="col-12 col-md-4 mt-3 col-sm-6 col-lg-4">
            <div class="card profile-card-5 card-style">
              <div class="card-img-block">
                <img class="card-img-top event-data" src="photos/<?php echo $event_record['photo']; ?>" alt="Card image cap">
              </div>
              <div class="col-12 card-body pt-0">
                <h5 class="card-title card-title"><?php echo $event_record['title'];?></h5>
                <p class="card-text card-inner-text"><?php echo $event_record['description']; ?></p>
                <a href="#" class="btn btn-primary">See Details</a>
              </div>
            </div>
          </div>
          <?php
        }
      }
       ?>
        </div>
      </div>
    </section>






    <section style="height: 4rem">
    </section>
    <h2 style="text-align: center; font-size: 3rem;">UPCOMMING EVENTS</h2>
    <section style="height: 1rem">
    </section>
    <section style="width :100%;">
      <div class="container-fluid">
        <div class="row flex-row flex-nowrap">
          <?php
            $events="SELECT * FROM event";
            $event_result=mysqli_query($db,$events);
            if (mysqli_num_rows($event_result)>0) {
              while ($event_record=mysqli_fetch_assoc($event_result)) {
                ?>
          <div class="col-12 col-md-4 mt-3 col-sm-6 col-lg-3">
            <div class="card profile-card-5 card-style">
              <div class="card-img-block">
                <img class="card-img-top event-data" src="photos/<?php echo $event_record['photo']; ?>" alt="Card image cap">
              </div>
              <div class="col-12 card-body pt-0">
                <h5 class="card-title card-title"><?php echo $event_record['title'];?></h5>
                <p class="card-text card-inner-text"><?php echo $event_record['description']; ?></p>
                <a href="#" class="btn btn-primary">See Details</a>
              </div>
            </div>
          </div>
          <?php
        }
      }
       ?>
        </div>
      </div>
    </section>







    <section style="height: 4rem">
    </section>
    <h2 style="text-align: center; font-size: 3rem;">All Clubs</h2>
    <section style="height: 1rem">
    </section>

    <section style="width :100%;">
      <div class="container-fluid">
        <div class="row flex-row">
          <!--Grid column-->
          <?php
            $events="SELECT * FROM all_clubs";
            $event_result=mysqli_query($db,$events);
            if (mysqli_num_rows($event_result)>0) {
              while ($event_record=mysqli_fetch_assoc($event_result)) {
            ?>
          <div class="col-4 col-md-4 mt-2 col-sm-6 col-lg-2">
            <a href="<?php echo $event_record['club_link'];?>">
              <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/<?php echo $event_record['club_photo']; ?>" data-holder-rendered="true">
            </a>
          </div>
          <?php
            }
          }
          ?>
          <?php
            $events="SELECT * FROM all_clubs";
            $event_result=mysqli_query($db,$events);
            if (mysqli_num_rows($event_result)>0) {
              while ($event_record=mysqli_fetch_assoc($event_result)) {
            ?>
          <div class="col-4 col-md-4 mt-2 col-sm-6 col-lg-2">
            <a href="<?php echo $event_record['club_link'];?>">
              <img class="col-12 col-md-12 mt-22 col-sm-12 col-lg-12 rounded-circle" alt="100x100" src="photos/<?php echo $event_record['club_photo']; ?>" data-holder-rendered="true">
            </a>
          </div>
          <?php
            }
          }
          ?>
        </div>
      </div>
    </section>
  </section>
  <section>






    <footer class="mainfooter" role="contentinfo">
      <div class="footer-middle">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <!--Column1-->
              <div class="footer-pad">
                <h4>About Club</h4>
                <ul class="list-unstyled">
                  <li><a href="#"></a></li>
                  <li><a href="#">Payment Center</a></li>
                  <li><a href="#">Contact Directory</a></li>
                  <li><a href="#">Forms</a></li>
                  <li><a href="#">News and Updates</a></li>
                  <li><a href="#">FAQs</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <!--Column1-->
              <div class="footer-pad">
                <h4>About NSU</h4>
                <ul class="list-unstyled">
                  <li><a href="http://www.northsouth.edu/">University Website</a></li>
                  <li><a href="http://www.northsouth.edu/academic/academic-calendar/">Academic Calendar</a></li>
                  <li><a href="https://rds3.northsouth.edu/">NSU Portal</a></li>
                  <li><a href="http://www.northsouth.edu/nsu-announcements/">NSU Announcements</a></li>
                  <li><a href="http://www.northsouth.edu/tuition-fees.html">Tuition and Other Fees</a></li>
                  <li><a href="http://institutions.northsouth.edu/alumniportal/public/">Alumni portal</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <!--Column1-->
              <div class="footer-pad">
                <h4>Top Clubs</h4>
                <ul class="list-unstyled">
                  <li><a href="CDCClub/index.html">CDC Club</a></li>
                  <li><a href="eceClub/index.html">CEC Club</a></li>
                  <li><a href="yesClub/index.html">Yes Club</a></li>
                  <li><a href="#">Yef Club</a></li>
                  <li><a href="#">Earth Club</a></li>
                  <li>
                    <a href="#"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3">
              <h4>Follow Us</h4>
              <ul class="social-network social-circle">
                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 copy">
              <p class="text-center">&copy; Copyright 2018 - Company Name. All rights reserved.</p>
            </div>
          </div>

        </div>
      </div>
    </footer>

  </section>






</body>



</html>
