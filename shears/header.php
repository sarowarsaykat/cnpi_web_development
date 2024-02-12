<?php
    include "./db_connect/db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to CNPI</title>
    <link rel="stylesheet" href="style.css">
    <!--lightbox2 start-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--lightbox2 end-->
    <!--font awesome cdn link start-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--font awesome cdn link end-->
    <!--bootstrap link start-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <!--bootstrap link end-->
</head>
<body>
    <div class="container shadow">
      <!--header section start-->
      <div class="row">
        <div class="col-md-12">
          <img src="media/banner.jpg" class="img-fluid"  alt="banner">
        </div>
      </div>
      <!--header section end-->
      <!--navber section start-->
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link text-light" href="index.php">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      About Us
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="misson.php">Mission & Vission</a></li>
                      <li><a class="dropdown-item" href="principal_message.php">Principal Message</a></li>
                      <li><a class="dropdown-item" href="at_a_glance.php">At a Glance</a></li>
                      <li><a class="dropdown-item" href="Location.php">Location</a></li>
                      <li><a class="dropdown-item" href="lab.php">Lab</a></li>
                      <li><a class="dropdown-item" href="Library.php">Library</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dipartments
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="computer.php">Computer</a></li>
                      <li><a class="dropdown-item" href="rac.php">RAC</a></li>
                      <li><a class="dropdown-item" href="Electrical.php">Electrical</a></li>
                      <li><a class="dropdown-item" href="electronics.php">Electronics</a></li>
                      <li><a class="dropdown-item" href="food.php">Food</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Academic
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="Academic_calendar.php">Academic Calendar</a></li>
                      <li><a class="dropdown-item" href="Class_routine.php">Class Routine</a></li>
                      <li><a class="dropdown-item" href="Syllebus.php">Syllebus</a></li>
                      <li><a class="dropdown-item" href="Admission.php">Admission</a></li>
                      <li><a class="dropdown-item" href="Probidhan.php">Grading Point & Probidhan</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Notice Board
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="General_notice.php">General Notice</a></li>
                      <li><a class="dropdown-item" href="Results.php">Results</a></li>
                      <li><a class="dropdown-item" href="step_stipend.php">STEP Stipend</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="photo_gallery.php">Photo Gallery</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Students
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="students_registration.php">Student Registration</a></li>
                      <li><a class="dropdown-item" href="all_student_info.php">All Students Info</a></li>
                      <li><a class="dropdown-item" href="old_student_job_info.php">Old Student Job Info</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Employees
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="Teachers.php">Teachers</a></li>
                      <li><a class="dropdown-item" href="Stuffs.php">Stuffs</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Job Placement
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="Posted_job_circulars.php">Posted Job Circulars</a></li>
                      <li><a class="dropdown-item" href="PDF_Job_Circulars.php">PDF Job Circulars</a></li>
                      <li><a class="dropdown-item" href="Job_Seekers.php">Job Seekers</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Others
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="page_1.php">Page 1</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="Contact_us.php">Contact Us</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
      <!--navber section end-->
      <!--latest news section start-->
      <div class="row mt-1">
        <div class="col-md-2">
          <p class="border border-dark p-2 bg-primary text-light text_1">Latest News>>></p>
          </div>
          <div class="col-md-10">
             
          <marquee class="border border-dark p-2" behavior="" direction="left"><?php
                $result = mysqli_query($con,"select * from latest_news order by id desc limit 0,3");
                while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                  echo $row['news'];
                }
             ?></marquee>
         
        </div>
      </div>
      <!--latest news section end-->
