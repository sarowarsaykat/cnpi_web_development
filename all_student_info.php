<?php
    include "shears/header.php";
?>
      <!--All Student Info start-->
      
        <div class="row">
            <div class="col-md-9">
              <div class="card">
                <div class="card-header text-light bg-primary p-3 fw-bold">
                  All Students Info
                </div>
                <div class="card-body">
                <form action="" method="get">
                    <div class="row">
                      <div class="col-md-5">
                          <label class="form-label fw-bold" for="Department">Department :</label>
                          <select class="form-select shadow" name="department" aria-label="Default select example">
                              <option value="">All Departments</option>
                            <?php
                                $result = mysqli_query($con,"select * from department_names order by id desc");
                                while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                            ?>
                              <option value="<?php echo $row['department'];?>" <?php if(isset($_GET['department'])){
                                 if($_GET['department']==$row['department']){echo "selected";};
                              }?>><?php echo $row['department'];?></option>
                            <?php
                                }
                            ?>
                          </select>
                      </div>
                      <div class="col-md-3">
                          <label class="form-label fw-bold" for="Session">Session :</label>
                          <select class="form-select shadow" name="session" aria-label="Default select example">
                              <option value="">All Session</option>
                              <option value="2008-2009">2008-2009</option>
                              <option value="2009-2010">2009-2010</option>
                              <option value="2010-2011">2010-2011</option>
                              <option value="2011-2012">2011-2012</option>
                              <option value="2012-2013">2012-2013</option>
                              <option value="2013-2014">2013-2014</option>
                              <option value="2014-2015">2014-2015</option>
                              <option value="2015-2016">2015-2016</option>
                              <option value="2016-2017">2016-2017</option>
                              <option value="2017-2018">2017-2018</option>
                              <option value="2018-2019">2018-2019</option>
                              <option value="2019-2020">2019-2020</option>
                              <option value="2020-2021">2020-2021</option>
                              <option value="2021-2022">2021-2022</option>
                              <option value="2022-2023">2022-2023</option>
                              <option value="2023-2024">2023-2024</option>
                              <option value="2024-2025">2024-2025</option>
                              <option value="2025-2026">2025-2026</option>
                  
                          </select>
                      </div>
                      <div class="col-md-2">
                          <label class="form-label fw-bold" for="Shift">Shift :</label>
                          <select class="form-select shadow" name="shift" aria-label="Default select example">
                              <option value="">Both Shift</option>
                              <option value="First Shift">1st</option>
                              <option value="Secound Shift">2nd</option>
                          </select>
                      </div>
                      <div class="col-md-2">
                          <label class="form-label fw-bold" for="Gender">Gender :</label>
                          <select class="form-select shadow" name="gender" aria-label="Default select example">
                              <option value="">Both</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                              <option value="Other">Other</option>
                          </select>
                      </div>
                  </div>
                  <div class="row mt-3">
                      <div class="col-md-5">
                          <label for="email" class="form-label fw-bold">Email address :</label>
                          <input type="email" name="email" class="form-control shadow" id="email" placeholder="Enter Your Email Address">
                      </div>
                      <div class="col-md-3">
                          <label for="Mobile Number" class="form-label fw-bold">Mobile Number :</label>
                          <input type="number" name="phone" class="form-control shadow" id="Mobile Number" placeholder="Mobile Number">
                      </div>
                      <div class="col-md-2">
                          <label for="Student Roll" class="form-label fw-bold">Student Roll :</label>
                          <input type="text" name="roll" class="form-control shadow" id="Student Roll" placeholder="Roll">
                      </div>
                      <div class="col-md-2">
                          <label for="Student Reg" class="form-label fw-bold">Student Reg :</label>
                          <input type="text" name="registration" class="form-control shadow" id="Student Reg" placeholder="Reg">
                      </div>
                  </div>
                  <div class="row mt-3">
                      <div class="col-md-12">
                          <button type="submit" class="btn btn-sm btn-success">Searh Student</button>
                          <button type="reset" class="btn btn-sm btn-warning">Reset</button>
                      </div>
                  </div>
                  </form>
                  <div class="row mt-4">
                      <div class="col-md-12">
                          <div class="table-responsive">
                              <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>Student Name</th>
                                        <th>Dept</th>
                                        <th>Shift</th>
                                        <th>Roll</th>
                                        <th>Reg</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $i=1;
                                        $condition ="";
                                        if(!empty($_GET)){
                                          if(!empty($_GET['department'])){
                                            $condition.=" and department='$_GET[department]'";
                                          }
                                          if(!empty($_GET['session'])){
                                            $condition.=" and session='$_GET[session]'";
                                          }
                                          if(!empty($_GET['shift'])){
                                            $condition.=" and shift='$_GET[shift]'";
                                          }
                                          if(!empty($_GET['gender'])){
                                            $condition.=" and gender='$_GET[gender]'";
                                          }
                                          if(!empty($_GET['email'])){
                                            $condition.=" and email='$_GET[email]'";
                                          }
                                          if(!empty($_GET['phone'])){
                                            $condition.=" and phone='$_GET[phone]'";
                                          }
                                          if(!empty($_GET['roll'])){
                                            $condition.=" and roll='$_GET[roll]'";
                                          }
                                          if(!empty($_GET['registration'])){
                                            $condition.=" and registration='$_GET[registration]'";
                                          }
                                        }
                                        $sql="select * from all_students_info where is_approved=1 $condition order by id desc";
                                        $result = mysqli_query($con,$sql);
                                        while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                    ?>
                                    <tr>
                                        <td><?php echo $i++;?></td>
                                        <td><?php echo $row['student_name'];?></td>
                                        <td><?php echo $row['department'];?></td>
                                        <td><?php echo $row['shift'];?></td>
                                        <td><?php echo $row['roll'];?></td>
                                        <td><?php echo $row['registration'];?></td>
                                        <td>
                                            <a href="students_details.php?details=<?php echo $row['details'];?>"><button class="btn btn-sm btn-success">Details</button></a>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                          </div>
                      </div>
                  </div>
                  
                  <div class="row">
                      <div class="col-md-12">
                        <nav aria-label="Page navigation example">
                          <ul class="pagination">
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          <!--All Student Info end-->
<?php
  include "shears/footer.php";
?>