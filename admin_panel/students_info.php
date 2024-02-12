<?php
    include "../db_connect/db_connect.php";
    include "./admin_shears/all_links.php";
    include "./admin_shears/nav.php";
    include "./admin_shears/sidebar.php";
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Students</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Students</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table" id="myTable">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Student Name</th>
                      <th>Dept</th>
                      <th>Shift</th>
                      <th>Roll</th>
                      <th>Registration</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <?php 
                      
                      $i=1;
                      $result = mysqli_query($con,"select * from all_students_info order by id desc");
                      while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                  ?>
                  <tbody>
                      <tr>
                          <td><?php echo $i++;?></td>
                          <td><?php echo $row['student_name'];?></td>
                          <td><?php echo $row['department'];?></td>
                          <td><?php echo $row['shift'];?></td>
                          <td><?php echo $row['roll'];?></td>
                          <td><?php echo $row['registration'];?></td>
                          <td><?php if ($row['is_approved'] == 1){
                            echo"<span class='badge bg-primary' >Approved</span>";
                          }else{
                            echo"<span class='badge bg-danger' >Pending</span>";
                          }?></td>
                          <td><?php if($row['is_approved'] == 0) {
                            echo "<a href='approved_students.php?id={$row['id']}' class='badge bg-success'>Approved</a>";
                          }?></td>
                      </tr>
                  </tbody>
                  <?php
                      }
                  ?>
                </table>
              </div>
              <!-- /.card-body -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- /.row -->
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
    include "./admin_shears/footer.php";
?>