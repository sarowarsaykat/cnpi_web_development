<?php
  include "../db_connect/db_connect.php";
  include "./admin_shears/all_links.php";
  include "./admin_shears/nav.php";
  include "./admin_shears/sidebar.php";

  if(!empty($_POST)){
    $news = $_POST['news'];
    date_default_timezone_set('Asia/Dhaka');
    $date=date('Y-m-d H:i:s');
    $query = mysqli_query($con,"insert into `latest_news`(`news`,`created_at`)values('$news','$date')");
    if($query){
      echo "<script>alert('Data inserted Successfully'); location.replace('view_latest_news.php');</script>";
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
            <h1>Latest News</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Letest News</li>
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
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="news">Add News</label>
                                <input type="text" name="news" class="form-control" id="news" placeholder="Enter news">
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