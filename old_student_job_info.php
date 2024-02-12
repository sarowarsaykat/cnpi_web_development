<?php
  include "shears/header.php";
?>
<!--Old Student Job Info start-->
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                  <div class="card-header text-light bg-primary p-3 fw-bold">
                    Featured
                  </div>
                  <div class="card-body">
                    <div class="row mt-2">
                      <div class="col-md-12">
                          <a href="old_students_registration.php"><button class="btn btn-danger">Click Hear To Add Old Student Job Info</button></a>
                      </div>
                  </div>
                  <div class="row mt-4">
                      <div class="col-md-5">
                          <label class="form-label fw-bold" for="Department">Department :</label>
                          <select class="form-select shadow" aria-label="Default select example">
                              <option selected>All Departments</option>
                              <option value="Computer">Computer</option>
                              <option value="RAC">RAC</option>
                              <option value="Electrical">Electrical</option>
                              <option value="Electronics">Electronics</option>
                              <option value="Food">Food</option>
                              <option value="Mecatronics">Mecatronics</option>
                          </select>
                      </div>
                      <div class="col-md-3">
                          <label class="form-label fw-bold" for="Session">Session :</label>
                          <select class="form-select shadow" aria-label="Default select example">
                              <option selected>All Session</option>
                              <option value="1">2008-2009</option>
                              <option value="2">2009-2010</option>
                              <option value="3">2010-2011</option>
                              <option value="3">2011-2012</option>
                              <option value="3">2012-2013</option>
                              <option value="3">2013-2014</option>
                              <option value="3">2014-2015</option>
                              <option value="3">2015-2016</option>
                              <option value="3">2016-2017</option>
                              <option value="3">2017-2018</option>
                              <option value="3">2018-2019</option>
                              <option value="3">2019-2020</option>
                              <option value="3">2020-2021</option>
                              <option value="3">2021-2022</option>
                              <option value="3">2022-2023</option>
                              <option value="3">2023-2024</option>
                              <option value="3">2024-2025</option>
                              <option value="3">2025-2026</option>
                  
                          </select>
                      </div>
                      <div class="col-md-2">
                          <label class="form-label fw-bold" for="Shift">Shift :</label>
                          <select class="form-select shadow" aria-label="Default select example">
                              <option selected>Both Shift</option>
                              <option value="First Shift">First Shift</option>
                              <option value="Secound Shift">Secound Shift</option>
                          </select>
                      </div>
                      <div class="col-md-2">
                          <label class="form-label fw-bold" for="Gender">Gender :</label>
                          <select class="form-select shadow" aria-label="Default select example">
                              <option selected>Both</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                              <option value="Other">Other</option>
                          </select>
                      </div>
                  </div>
                  <div class="row mt-3">
                      <div class="col-md-5">
                          <label for="email" class="form-label fw-bold">Email address :</label>
                          <input type="email" class="form-control shadow" id="email" placeholder="Enter Your Email Address">
                      </div>
                      <div class="col-md-3">
                          <label for="Mobile Number" class="form-label fw-bold">Mobile Number :</label>
                          <input type="number" class="form-control shadow" id="Mobile Number" placeholder="Mobile Number">
                      </div>
                      <div class="col-md-2">
                          <label for="Student Roll" class="form-label fw-bold">Student Roll :</label>
                          <input type="text" class="form-control shadow" id="Student Roll" placeholder="Roll">
                      </div>
                      <div class="col-md-2">
                          <label for="Student Reg" class="form-label fw-bold">Student Reg :</label>
                          <input type="text" class="form-control shadow" id="Student Reg" placeholder="Reg">
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
                                  <tr>
                                      <th>Sl No.</th>
                                      <th>Student Name</th>
                                      <th>Dept</th>
                                      <th>Roll</th>
                                      <th>Company Name</th>
                                      <th>Designation</th>
                                      <th>Details</th>
                                  </tr>
                                  <tr>
                                      <td>1</td>
                                      <td>Abdul Mozid</td>
                                      <td>Computer</td>
                                      <td>311034</td>
                                      <td>Durbar Software</td>
                                      <td>Jr. Software Engineer</td>
                                      <td><button class="btn btn-sm btn-success">View Ditails</button></td>
                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td>Abdul Mozid</td>
                                      <td>Computer</td>
                                      <td>311034</td>
                                      <td>Durbar Software</td>
                                      <td>Jr. Software Engineer</td>
                                      <td><button class="btn btn-sm btn-success">View Ditails</button></td>
                                  </tr>
                                  <tr>
                                      <td>3</td>
                                      <td>Abdul Mozid</td>
                                      <td>Computer</td>
                                      <td>311034</td>
                                      <td>Durbar Software</td>
                                      <td>Jr. Software Engineer</td>
                                      <td><button class="btn btn-sm btn-success">View Ditails</button></td>
                                  </tr>
                                  <tr>
                                      <td>4</td>
                                      <td>Abdul Mozid</td>
                                      <td>Computer</td>
                                      <td>311034</td>
                                      <td>Durbar Software</td>
                                      <td>Jr. Software Engineer</td>
                                      <td><button class="btn btn-sm btn-success">View Ditails</button></td>
                                  </tr>
                                  <tr>
                                      <td>5</td>
                                      <td>Abdul Mozid</td>
                                      <td>Computer</td>
                                      <td>311034</td>
                                      <td>Durbar Software</td>
                                      <td>Jr. Software Engineer</td>
                                      <td><button class="btn btn-sm btn-success">View Ditails</button></td>
                                  </tr>
                                  <tr>
                                      <td>6</td>
                                      <td>Abdul Mozid</td>
                                      <td>Computer</td>
                                      <td>311034</td>
                                      <td>Durbar Software</td>
                                      <td>Jr. Software Engineer</td>
                                      <td><button class="btn btn-sm btn-success">View Ditails</button></td>
                                  </tr>
                                  <tr>
                                      <td>7</td>
                                      <td>Abdul Mozid</td>
                                      <td>Computer</td>
                                      <td>311034</td>
                                      <td>Durbar Software</td>
                                      <td>Jr. Software Engineer</td>
                                      <td><button class="btn btn-sm btn-success">View Ditails</button></td>
                                  </tr>
                                  <tr>
                                      <td>8</td>
                                      <td>Abdul Mozid</td>
                                      <td>Computer</td>
                                      <td>311034</td>
                                      <td>Durbar Software</td>
                                      <td>Jr. Software Engineer</td>
                                      <td><button class="btn btn-sm btn-success">View Ditails</button></td>
                                  </tr>
                                  <tr>
                                      <td>9</td>
                                      <td>Abdul Mozid</td>
                                      <td>Computer</td>
                                      <td>311034</td>
                                      <td>Durbar Software</td>
                                      <td>Jr. Software Engineer</td>
                                      <td><button class="btn btn-sm btn-success">View Ditails</button></td>
                                  </tr>
                                  <tr>
                                      <td>10</td>
                                      <td>Abdul Mozid</td>
                                      <td>Computer</td>
                                      <td>311034</td>
                                      <td>Durbar Software</td>
                                      <td>Jr. Software Engineer</td>
                                      <td><button class="btn btn-sm btn-success">View Ditails</button></td>>
                                  </tr>
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
          <!--Old Student Job Info end-->
<?php
  include "shears/footer.php";
?>