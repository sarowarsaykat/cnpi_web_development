<?php
  include "shears/header.php";
?>
      <!--STEP Stipned start-->
        <div class="row">
          <div class="col-md-9">
            <div class="row">
                 <div class="col-md-12">
                     <div class="card">
                        <div class="card-header bg-primary p-3 fw-bold text-light">
                             STEP Stipned
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>File Name</th>
                                        <th>Upload Date Time</th>
                                        <th>Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i=1;
                                    $result =mysqli_query($con,"select * from stipneds order by id desc");
                                    while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                    ?>
                                    <tr>
                                        <td><?php echo $i++;?></td>
                                        <td><?php echo $row['file_names'];?></td>
                                        <td><?php echo $row['created_at'];?></td>
                                        <td><a href="admin_panel/uploads/<?php echo $row['pdf'];?>"><button class="btn btn-success text-light" type="button">download</button></a></td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <!--STEP Stipned end-->
<?php
  include "shears/footer.php";
?>