<?php
  include "shears/header.php";
?>
      <!-- All Stuffs start-->
        <div class="row">
          <div class="col-md-9">
            <div class="card">
                <div class="card-header text-light fw-bold p-3 bg-primary">
                    All Stuffs
                </div>
                <div class="card-body">
                    <div class="row ">
                        <div class="col-md-5">
                            <label for="Stuff Name" class="form-label fw-bold">Stuff Name :</label>
                            <input type="text" class="form-control shadow" id="Stuff Name">
                        </div>
                        <div class="col-md-5">
                            <label for="Mobile No" class="form-label fw-bold">Mobile No :</label>
                            <input type="number" class="form-control shadow" id="Mobile No">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-sm btn-success">Searh Student</button>
                            <button type="reset" class="btn btn-sm btn-warning">Reset</button>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center">
                                  <thead>
                                      <tr>
                                          <th>Sl No.</th>
                                          <th>Stuff Name</th>
                                          <th>Designation	</th>
                                          <th>Phone No</th>
                                          <th>Details</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                        <?php
                                            $i=1;
                                            $result = mysqli_query($con,"select * from stuffs_info order by id desc");
                                            while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                        ?>
                                      <tr>
                                          <td><?php echo $i++;?></td>
                                          <td><?php echo $row['stuff_name'];?></td>
                                          <td><?php echo $row['designation'];?></td>
                                          <td><?php echo $row['phone_no'];?></td>
                                          <td>
                                                <a href="stuffs_details.php?details=<?php echo $row['details'];?>"><button class="btn btn-sm btn-success">Details</button></a>
                                          </td>
                                      <?php
                                          }
                                      ?>
                                  </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                      <div class="row">
                        <div class="col-md-12">
                          <nav aria-label="Page navigation example">
                            <ul class="pagination">
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                  <span aria-hidden="true">&laquo;</span>
                                </a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item"><a class="page-link" href="#">4</a></li>
                              <li class="page-item"><a class="page-link" href="#">5</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                  <span aria-hidden="true">&raquo;</span>
                                </a>
                              </li>
                            </ul>
                          </nav>
                        </div>
                    </div>
                 </div>
              </div>
          </div>
          <!-- All Stuffs end-->
<?php
  include "shears/footer.php";
?>