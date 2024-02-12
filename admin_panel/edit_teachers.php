<?php
  include "../db_connect/db_connect.php";
  include "./admin_shears/all_links.php";
  include "./admin_shears/nav.php";
  include "./admin_shears/sidebar.php";
  if(!empty($_POST)){
    $id = $_POST['id'];
    $teacher_name = $_POST['teacher_name'];
    $department = $_POST['department'];
    $designation = $_POST['designation'];
    $phone_no = $_POST['phone_no'];
    $details = $_POST['details'];
    $update = mysqli_query($con, "update teachers_info set teacher_name ='$teacher_name', department ='$department', designation ='designation', phone_no ='$phone_no', details='$details' where id='$id'");
    if ($update){
        echo "<script>alert('data has been updated successfully.'); location.replace('view_teachers.php');</script>";
    } else {
        echo "<script>alert('Data not updated.');</script>";
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
                <?php
                $id = $_GET['id'];
                $result = mysqli_query($con, "select * from teachers_info where id='$id'");
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                ?>
                <div class="card-body">
                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="teacher_name">Teacher Name</label>
                          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                          <input type="text" name="teacher_name" class="form-control" id="teacher_name" placeholder="Enter Name" value="<?php echo $row['teacher_name']; ?>">
                        </div>
                        <div class="form-group">
                          <label for="designation">Designation</label>
                          <input type="text" class="form-control" name="designation" id="designation" placeholder="Enater Designation" value="<?php echo $row['designation']; ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Department</label>
                          <select class="form-control select2 select2-danger" name="department" data-dropdown-css-class="select2-danger" style="width: 100%;" value="<?php echo $row['department']; ?>">
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
                        <input type="number" class="form-control" name="phone_no" id="phone_no" placeholder="Enter Phone Number" value="<?php echo $row['phone_no'];?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="details" class="form-label">Details</label>
                        <textarea class="form-control" name="details" id="details" rows="3"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary"input="Submit">
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