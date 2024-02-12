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
            <h1>All Teachers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Teachers</li>
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
                            <th>Sl No.</th>
                            <th>Teacher Name</th>
                            <th>Department</th>
                            <th>Designation</th>
                            <th>Phone No</th>
                            <th>Details</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i=1;
                            $result = mysqli_query($con,"select * from teachers_info order by id desc");
                            while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        ?>
                        <tr>
                            <td><?php echo $i++;?></td>
                            <td><?php echo $row['teacher_name'];?></td>
                            <td><?php echo $row['department'];?></td>
                            <td><?php echo $row['designation'];?></td>
                            <td><?php echo $row['phone_no'];?></td>
                            <td><?php echo $row['details'];?></td>
                            <td>
                                <a href="edit_teachers.php?id=<?php echo $row['id'];?>"><button class="btn btn-sm btn-success">edit</button></a>
                                <a href="delete_teachers.php?id=<?php echo $row['id'];?>"><button class="btn btn-sm btn-danger">delete</button></a>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
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