<?php
  include "shears/header.php";
?>
      <!--Job SeeKers start-->
        <div class="row">
          <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                  <div class="card">
                      <div class="card-header  text-light bg-primary p-3 fw-bold">
                        Job SeeKers
                      </div>
                      <div class="card-body">
                        <div class="row mt-2">
                          <div class="col-md-12">
                              <button class="btn btn-danger">Click Hear To Add Your Data Into Job Seeker Database</button>
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
                              <label class="form-label fw-bold" for="Passing Year">Passing Year :</label>
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
                              <label class="form-label fw-bold" for="Result">Result :</label>
                              <select class="form-select shadow" aria-label="Default select example">
                                  <option selected>All</option>
                                  <option value="">3.75-4.00</option>
                                  <option value="">3.50-3.74</option>
                                  <option value="">3.25-3.49</option>
                                  <option value="">3.00-3.24</option>
                                  <option value="">2.50-2.99</option>
                                  <option value="">2-3.49</option>
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
                        <div class="row mt-4">
                            <div class="col-md-8">
                                <label class="form-label fw-bold" for="Job Keyword">Job Keyword (Jr.Programmer,operator etc) :</label>
                                <input type="text" class="form-control shadow" id="Job Keyword">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-bold" for="Experiance">Experiance :</label>
                                <select class="form-select shadow" aria-label="Default select example">
                                    <option selected>All</option>
                                    <option value="">Fresh</option>
                                    <option value="">6 months</option>
                                    <option value="">1 years</option>
                                    <option value="">2 years</option>
                                    <option value="">3 years</option>
                                    <option value="">4 years</option>
                                    <option value="">5 years</option>
                                    <option value="">6 years</option>
                                </select>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-sm btn-success">Searh Student</button>
                                    <button type="reset" class="btn btn-sm btn-warning">Reset</button>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                      <tr>
                                          <th>Sl No.</th>
                                          <th>Name</th>
                                          <th>Department</th>
                                          <th>Passing Year</th>
                                          <th>Experiance</th>
                                          <th>Phone</th>
                                          <th>Details</th>
                                      </tr>
                                      <tr>
                                          <td>1</td>
                                          <td>Abdul Mozid</td>
                                          <td>Computer</td>
                                          <td>2014</td>
                                          <td>3 years</td>
                                          <td>01761835001</td>
                                          <td><button class="btn btn-sm btn-success">View Ditails</button></td>
                                      </tr>
                                      <tr>
                                          <td>2</td>
                                          <td>Abdul Mozid</td>
                                          <td>Computer</td>
                                          <td>2014</td>
                                          <td>3 years</td>
                                          <td>01761835001</td>
                                          <td><button class="btn btn-sm btn-success">View Ditails</button></td>
                                      </tr>
                                      <tr>
                                          <td>3</td>
                                          <td>Abdul Mozid</td>
                                          <td>Computer</td>
                                          <td>2014</td>
                                          <td>3 years</td>
                                          <td>01761835001</td>
                                          <td><button class="btn btn-sm btn-success">View Ditails</button></td>
                                      </tr>
                                      <tr>
                                          <td>4</td>
                                          <td>Abdul Mozid</td>
                                          <td>Computer</td>
                                          <td>2014</td>
                                          <td>3 years</td>
                                          <td>01761835001</td>
                                          <td><button class="btn btn-sm btn-success">View Ditails</button></td>
                                      </tr>
                                      <tr>
                                          <td>5</td>
                                          <td>Abdul Mozid</td>
                                          <td>Computer</td>
                                          <td>2014</td>
                                          <td>3 years</td>
                                          <td>01761835001</td>
                                          <td><button class="btn btn-sm btn-success">View Ditails</button></td>
                                      </tr>
                                      <tr>
                                          <td>6</td>
                                          <td>Abdul Mozid</td>
                                          <td>Computer</td>
                                          <td>2014</td>
                                          <td>3 years</td>
                                          <td>01761835001</td>
                                          <td><button class="btn btn-sm btn-success">View Ditails</button></td>
                                      </tr>
                                      <tr>
                                          <td>7</td>
                                          <td>Abdul Mozid</td>
                                          <td>Computer</td>
                                          <td>2014</td>
                                          <td>3 years</td>
                                          <td>01761835001</td>
                                          <td><button class="btn btn-sm btn-success">View Ditails</button></td>
                                      </tr>
                                      <tr>
                                          <td>8</td>
                                          <td>Abdul Mozid</td>
                                          <td>Computer</td>
                                          <td>2014</td>
                                          <td>3 years</td>
                                          <td>01761835001</td>
                                          <td><button class="btn btn-sm btn-success">View Ditails</button></td>
                                      </tr>
                                      <tr>
                                          <td>9</td>
                                          <td>Abdul Mozid</td>
                                          <td>Computer</td>
                                          <td>2014</td>
                                          <td>3 years</td>
                                          <td>01761835001</td>
                                          <td><button class="btn btn-sm btn-success">View Ditails</button></td>
                                      </tr>
                                      <tr>
                                          <td>10</td>
                                          <td>Abdul Mozid</td>
                                          <td>Computer</td>
                                          <td>2014</td>
                                          <td>3 years</td>
                                          <td>01761835001</td>
                                          <td><button class="btn btn-sm btn-success">View Ditails</button></td>
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
            </div>
          </div>
          <!--Job SeeKers end-->
<?php
  include "shears/footer.php";
?>