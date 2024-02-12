<?php
    include "shears/header.php";
?>
      <!--Teacher start-->
        <div class="row">
          <div class="col-md-9">
            <div class="card">
                <div class="card-header bg-primary p-3 fw-bold text-light">
                    Students Details
                </div>
                <div class="card-body">
                    <div class="row mt-2">
                        <div class="col-md-12">
                        <?php
                            $details = $_GET['details'];
                            $result = mysqli_query($con, "select * from all_students_info where details='$details'");
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        ?>
                            <p><?php echo $row['details'];?></p>
                        </div>
                    </div>
                 </div>
              </div>
          </div>
          <!--Computer end-->
<?php
  include "shears/footer.php";
?>