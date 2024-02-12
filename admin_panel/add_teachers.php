<?php
  include "../db_connect/db_connect.php";
  include "./admin_shears/all_links.php";
  include "./admin_shears/nav.php";
  include "./admin_shears/sidebar.php";
  if(!empty($_POST)){
    $teacher_name = $_POST['teacher_name'];
    $department = $_POST['department'];
    $designation = $_POST['designation'];
    $phone_no = $_POST['phone_no'];
    $details = $_POST['details'];
    date_default_timezone_set('Asia/Dhaka');
    $date=date('Y-m-d H:i:s');
    $query = mysqli_query($con,"insert into `teachers_info`(`teacher_name`,`department`,`designation`,`phone_no`,`details`,`created_at`)values('$teacher_name','$department','$designation','$phone_no','$details','$date')");
    if($query){
      echo "<script>alert('Data has been inserted successfully.'); location.replace('view_teachers.php');</script>";
    }
  }
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Teachers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Teachers</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
                <div class="card-body">
                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="teacher_name">Teacher Name</label>
                          <input type="text" name="teacher_name" class="form-control" id="teacher_name" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                          <label for="designation">Designation</label>
                          <input type="text" class="form-control" name="designation" id="designation" placeholder="Enater Designation">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Department</label>
                          <select class="form-control select2 select2-danger" name="department" data-dropdown-css-class="select2-danger" style="width: 100%;">
                            <option selected>Department</option>
                            <?php
                              $result = mysqli_query($con,"select * from department_names order by id asc");
                              while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                            ?>
                            <option><?php echo $row['department'];?></option>
                            <?php
                              }
                            ?>
                          </select>
                        </div>
                      <div class="form-group">
                        <label for="phone_no">Phone No</label>
                        <input type="number" class="form-control" name="phone_no" id="phone_no" placeholder="Enter Phone Number">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="Details" class="form-label">Details</label>
                        <textarea class="form-control" name="details" id="Details" rows="3"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Submit">
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php
    include "./admin_shears/footer.php";
 ?>