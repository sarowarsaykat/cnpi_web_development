<?php
    include "shears/header.php";
    $flag = 0;
    $alert_class = "";
    $alert_text = "";
    if(!empty($_POST)){
      $student_name = $_POST['student_name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $gender = $_POST['gender'];
      $department = $_POST['department'];
      $session = $_POST['session'];
      $shift = $_POST['shift'];
      $roll = $_POST['roll'];
      $registration = $_POST['registration'];
      $details = $_POST['details'];
      date_default_timezone_set('Asia/Dhaka');
      $date=date('Y-m-d H:i:s');
      $query = mysqli_query($con, "insert into `all_students_info`(`student_name`,`email`,`phone`,`gender`,`department`,`session`,`shift`,`roll`,`registration`,`details`,`created_at`) values('$student_name','$email','$phone','$gender','$department','$session','$shift','$roll','$registration','$details','$date')");
      if($query){
        $flag=1;
        $alert_class = "alert-success";
        $alert_text = "Data has been inserted successfully.";
      }else{
        $flag=2;
        $alert_class = "alert-danger";
        $alert_text = "Problem has been occured.";
      }
    }
?>
      <!--Students registration start-->
        <div class="row">
          <div class="col-md-9">
            <div class="card">
              <div class="card-header text-light bg-primary p-3 fw-bold">
                Students Registration
              </div>
                <form action="" method="post">
                  <div class="card-body">
                    <div class="row">
                      <!--right side form start-->
                      <?php if($flag>0){?>
                      <div class="col-md-12">
                        <div class="alert <?php echo $alert_class; ?>" role="alert">
                            <?php echo $alert_text; ?>
                        </div>
                      </div>
                      <?php
                      }
                      ?>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name" class="form-label fw-bold">Student Name</label>
                            <input type="text" class="form-control shadow" name="student_name" id="student_name" placeholder="Enter Name"> 
                        </div>
                        <div class="form-group">
                            <label for="Mobile Number" class="form-label fw-bold">Mobile Number :</label>
                            <input type="number" class="form-control shadow" name="phone" id="Mobile Number" placeholder="Mobile Number">
                        </div>
                        <div class="form-group">
                            <label class="form-label fw-bold" for="Department">Department :</label>
                            <select class="form-select shadow" name="department" aria-label="Default select example">
                                <option selected>All Departments</option>
                              <?php
                                  $result = mysqli_query($con,"select * from department_names order by id desc");
                                  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                              ?>
                                <option><?php echo $row['department'];?></option>
                              <?php
                                  }
                              ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label fw-bold" for="Shift">Shift :</label>
                            <select class="form-select shadow" name="shift" aria-label="Default select example">
                                <option selected>Both Shift</option>
                                <option value="First Shift">1st</option>
                                <option value="Secound Shift">2nd</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Student Reg" class="form-label fw-bold">Student Reg :</label>
                            <input type="text" class="form-control shadow" name="registration" id="Student Reg" placeholder="Reg">
                        </div>
                      </div>
                      <!--right side form end-->
                      <!--left side form start-->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="email" class="form-label fw-bold">Email address :</label>
                          <input type="email" class="form-control shadow" name="email" id="email" placeholder="Enter Email Address">
                        </div>
                        <div class="form-group">
                            <label class="form-label fw-bold" for="Gender">Gender :</label>
                            <select class="form-select shadow" name="gender" aria-label="Default select example">
                                <option selected>Both</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label fw-bold" for="Session">Session :</label>
                            <select class="form-select shadow" name="session" aria-label="Default select example">
                              <option selected>All Session</option>
                                <option>2008-2009</option>
                                <option>2009-2010</option>
                                <option>2010-2011</option>
                                <option>2011-2012</option>
                                <option>2012-2013</option>
                                <option>2013-2014</option>
                                <option>2014-2015</option>
                                <option>2015-2016</option>
                                <option>2016-2017</option>
                                <option>2017-2018</option>
                                <option>2018-2019</option>
                                <option>2019-2020</option>
                                <option>2020-2021</option>
                                <option>2021-2022</option>
                                <option>2022-2023</option>
                                <option>2023-2024</option>
                                <option>2024-2025</option>
                                <option>2025-2026</option>
                      
                              </select>
                        </div>
                        <div class="form-group">
                            <label for="Student Roll" class="form-label fw-bold">Student Roll :</label>
                            <input type="text" class="form-control shadow" name="roll" id="Student Roll" placeholder="Roll">
                        </div>
                      </div>
                        <!--left side form end-->
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="details" class="form-label fw-bold">Details</label>
                            <textarea class="form-control shadow" name="details" id="details" rows="3"></textarea>
                          </div>
                        </div>
                    </div>
                    <div class="mt-3">
                      <input type="submit" class="btn btn-lg btn-primary" value="Submit">
                    </div>
                  </div>
                </form>
            </div>
          </div>
          <!--Students registration end-->
<?php
  include "shears/footer.php";
?>