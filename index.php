<?php
  include "shears/header.php";
?>
      <!--carouser photo secton start-->
       <div class="row ">
          <div class="col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <?php
                         $photo_gallery =mysqli_query($con,"select * from banners order by id desc limit 0,4");
                         while($photo=mysqli_fetch_array($photo_gallery, MYSQLI_ASSOC)){
                    ?>
                    <div class="carousel-item active">
                      <img src="admin_panel/uploads/<?php echo $photo['photo'];?>" class="d-block" style="width:100%; height:400px;" alt="...">
                    </div>
                    <?php
                         }
                    ?>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
            </div>
          </div>
        </div>
        <!--carouser photo secton end-->
        <div class="row">
          <div class="col-md-9">
             <!--head of body start-->
                <div class="row mt-2">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header bg-primary text-light fw-bold p-3">
                        Head Of Body
                      </div>
                      <div class="card-body">
                        <p class="card-text">Welcome to the Chapainawabgonj Polytechnic Institute, One of the most important govt. educational institute in Bangladesh. From 2006 till now its organizing and training a huge manpower and playing a great roll in development of the country.No country, mainly the developing third world's countries can develop without technical education and realizing this truth, the government of the Peoples Republic of Bangladesh has established around 54 Polytechnic Institutes to make proper and efficient manpower. The Chapainawabgonj Polytechnic Institute is playing a vital role in this purpose.This polytechnic is establish in 2006.From begging 2 Departments are computer and RAC has in this polytechnic institute.It is stay on side of Mohanonda river .and near of baroghoria bajar chapainawabgonj.At this time 5 Departments is running. The mission of Chapainawabgonj polytechnic institute is make a powerful man power. Welcome to the Chapainawabgonj Polytechnic Institute, One of the most important govt. educational institute in Bangladesh. From 2006 till now its organizing and training a huge manpower and playing a great roll in development of the country.No country, mainly the developing third world's countries can develop without technical education and realizing this truth, the government of the Peoples Republic of Bangladesh has established around 54 Polytechnic Institutes to make proper and efficient manpower. The Chapainawabgonj Polytechnic Institute is playing a vital role in this purpose.This polytechnic is establish in 2006.From begging 2 Departments are computer and RAC has in this polytechnic institute.It is stay on side of Mohanonda river .and near of baroghoria bajar chapainawabgonj.At this time 5 Departments is running. The mission of Chapainawabgonj polytechnic institute is make a powerful man power. Welcome to the Chapainawabgonj Polytechnic Institute, One of the most important govt. educational institute in Bangladesh. From 2006 till now its organizing and training a huge manpower and playing a great roll in development of the country.No country, mainly the developing third world's countries can develop without technical education and realizing this truth, the government of the Peoples Republic of Bangladesh has established around 54 Polytechnic Institutes to make proper and efficient manpower. The Chapainawabgonj Polytechnic Institute is playing a vital role in this purpose.This polytechnic is establish in 2006.From begging 2 Departments are computer and RAC has in this polytechnic institute.It is stay on side of Mohanonda river .and near of baroghoria bajar chapainawabgonj.At this time 5 Departments is running. The mission of Chapainawabgonj polytechnic institute is make a powerful man power. Welcome to the Chapainawabgonj Polytechnic Institute, One of the most important govt. One of the most important govt. One of the most important govt. One of the most important govt. One of the most important govt. One of the most important govt. One of the most important govt. One of the most important govt. Welcome to the Chapainawabgonj Polytechnic Institute, One of the most important govt. One of the most important govt.</p>
                      </div>
                    </div>
                  </div>
                </div>
             <!--head of body end-->
            <div class="row mt-2">
              <!--principal message section start-->
              <div class="col-md-5">
                <div class="card">
                    <div class="card-header p-3 bg-primary text-light fw-bold">
                        Principal Message
                    </div>
                    <div class="card-body">
                      <img src="media/abdul_mozid.jpg" class="d-inline-block" style="width: 80px; height: 80px; float: left; margin-right: 10px;" alt="">
                      <h5>Md. Abdul Mozid</h5>
                        <h6>BSc in Computer Science Principal CNPI</h6>
                        <p>My heartiest welcome from Dhaka Polytechnic Institute (DPI). Its a technical vocational engineering institution located city of Bangladesh at the heart of the capital . This institute was established in1955 with the concept of producing product in to productivity. DPI has an excellent TVET friendly academic environment.It is reliable and dependable.DPI aims at working closely with the industries to satisfy the needs of job market home and abroad.</p>
                        <button class="btn btn-success" >read more</button>
                    </div>
                </div>
              </div>
              <!--principal message section end-->
                <!--table section start-->
                <div class="col-md-7">
                  <div class="card">
                      <div class="card-header p-3 bg-primary text-light fw-bold">
                          Institute At a Glance
                      </div>
                      <div class="card-body">
                      <table class="table table-bordered border-primary">
                          <tr>
                              <th>Facility</th>
                              <th>Content</th>
                              <th>Facility</th>
                              <th>Content</th>
                          </tr>
                          <tr>
                              <td>Established</td>
                              <td>2006</td>
                              <td>Total Area(Acres)</td>
                              <td>20</td>
                          </tr>
                          <tr>
                              <td>Technology</td>
                              <td>6</td>
                              <td>Students</td>
                              <td>2595</td>
                          </tr>
                          <tr>
                              <td>Teachers</td>
                              <td>2006</td>
                              <td>Staffs</td>
                              <td>146</td>
                          </tr>
                          <tr>
                              <td>Academic Building</td>
                              <td>2</td>
                              <td>Administrative Building</td>
                              <td>1</td>
                          </tr>
                          <tr>
                              <td>Auditorium</td>
                              <td>1</td>
                              <td>Library</td>
                              <td>1</td>
                          </tr>
                          <tr>
                              <td>Playground</td>
                              <td>2</td>
                              <td>Principal Quarter</td>
                              <td>1</td>
                          </tr>
                          <tr>
                              <td>Blood Donor</td>
                              <td>234</td>
                              <td>Lab & Workshop</td>
                              <td>15</td>
                          </tr>
                      </table>
                    </div>
                  </div>
              </div>
              <!--table section end-->
            </div>  
          </div>
<?php
    include "shears/footer.php";
?>