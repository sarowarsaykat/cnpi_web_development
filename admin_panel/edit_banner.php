<?php
  include "../db_connect/db_connect.php";
  include "./admin_shears/all_links.php";
  include "./admin_shears/nav.php";
  include "./admin_shears/sidebar.php";
  if(!empty($_POST)){
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $file_name= basename( $_FILES["fileToUpload"]["name"]);
        $id = $_POST['id'];
        $update = mysqli_query($con, "update banners set photo='$file_name' where id='$id'");
        if ($update){
            echo "<script>alert('data has been updated successfully.'); location.replace('view_banner.php');</script>";
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
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
            <h1>Banner Image</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Banner Image</li>
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
              <form role="form" method="post" enctype="multipart/form-data">
                <?php
                $id = $_GET['id'];
                $result = mysqli_query($con, "select * from banners where id='$id'");
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                ?>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Add Banner</label>
                                <input type="file" name="fileToUpload" class="form-control" id="fileToUpload">
                            </div>
                            <img width="40px" src="uploads/<?php echo $row['photo'];?>" alt="">
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <input type="submit" class="btn btn-primary" name="submit" input="Submit">
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