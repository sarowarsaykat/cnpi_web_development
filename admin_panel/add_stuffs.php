<?php
  include "../db_connect/db_connect.php";
  include "./admin_shears/all_links.php";
  include "./admin_shears/nav.php";
  include "./admin_shears/sidebar.php";
  if(!empty($_POST)){
    $stuff_name = $_POST['stuff_name'];
    $designation = $_POST['designation'];
    $phone_no = $_POST['phone_no'];
    $details = $_POST['details'];
    date_default_timezone_set('Asia/Dhaka');
    $date=date('Y-m-d H:i:s');
    $query = mysqli_query($con,"insert into `stuffs_info`(`stuff_name`,`designation`,`phone_no`,`details`,`created_at`)values('$stuff_name','$designation','$phone_no','$details','$date')");
    if($query){
      echo "<script>alert('Data has been inserted successfully.');</script>";
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
            <h1>Add Stuffs</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">add Stuffes</li>
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
              <!-- form start -->
              <form role="form" method="post">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="stuff_name">Stuff Name</label>
                          <input type="text" class="form-control" name="stuff_name" id="stuff_name" placeholder="Enter Stuff Name">
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="designation">Designation</label>
                        <input type="text" class="form-control" name="designation" id="designation" placeholder="Enter designation">
                      </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="phone_no">Phone No</label>
                          <input type="number" class="form-control" name="phone_no" id="phone_no" placeholder="Enater Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="Details" class="form-label">Details</label>
                            <textarea class="form-control" name="details" id="Details" rows="3"></textarea>
                        </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" input="Submit">
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