<?php
  include "../db_connect/db_connect.php";
  include "./admin_shears/all_links.php";
  include "./admin_shears/nav.php";
  include "./admin_shears/sidebar.php";

  if(!empty($_POST)){
    $id = $_POST['id'];
    $news = $_POST['news'];
    $update = mysqli_query($con, "update latest_news set news ='$news' where id='$id'");
    if ($update){
        echo "<script>alert('data has been updated successfully.'); location.replace('view_latest_news.php');</script>";
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
            <h1>Latest News</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Latest news</li>
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
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
                <?php
                $id = $_GET['id'];
                $result = mysqli_query($con, "select * from latest_news where id='$id'");
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="department">Latest News</label>
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <input type="text" name="news" class="form-control" id="news" placeholder="Enter news" value="<?php echo $row['news']; ?>">
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