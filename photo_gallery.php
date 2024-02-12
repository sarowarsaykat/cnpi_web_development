<?php
  include "shears/header.php";
?>
      <!--photo_gallery start-->
        <div class="row">
          <div class="col-md-9">
          <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-primary p-3 fw-bold text-light">
                             Photo Gallery
                        </div>
                        <div class="card-body">
                          <div class="row">
                              <?php
                                $photo_gallery =mysqli_query($con,"select * from photo_gallerys order by id desc limit 0,30");
                                while($photo=mysqli_fetch_array($photo_gallery, MYSQLI_ASSOC)){
                              ?>
                              <div class="col-md-3">
                                <a href="admin_panel/uploads/<?php echo $photo['photo'];?>" data-lightbox="image-1"><img src="admin_panel/uploads/<?php echo $photo['photo'];?>" style="width:100%; height:150px;" class="img-thumbnail mt-2" alt="photo_gallery"></a>
                              </div>
                              <?php
                                }
                              ?>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <!--photo_gallery end-->
<?php
  include "shears/footer.php";
?>

