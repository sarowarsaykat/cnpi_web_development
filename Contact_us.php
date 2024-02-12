<?php
  include "shears/header.php";
  if(!empty($_POST)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    date_default_timezone_set('Asia/Dhaka');
    $date=date('Y-m-d H:i:s');
    $query = mysqli_query($con, "insert into `contact_us`(`name`,`email`,`number`,`message`,`created_at`)value('$name','$email','$number','$message','$date')");
    if($query){
        echo "<script>alert('SMS Has Been Inserted Successfully.');</script>";
    }else{
        echo " <script>alert('Data not inserted.');</script>";
    }
  }
?>
      
        <div class="row">
          <div class="col-md-9">
            <div class="card">
                <div class="card-header text-light fw-bold p-3 bg-primary">
                    Contact Us
                </div>
                <form action="" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control shadow" name="name" id="name" placeholder="Enter name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control shadow" name="email" id="email" placeholder="Enter email">
                            </div>
                            <div class="col-md-12 mt-4">
                                <input type="number" class="form-control shadow" name="number" id="number" placeholder="Enter number">
                                <textarea class="form-control shadow mt-4" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your message"></textarea>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" name="submit" class=" btn btn-outline-success mt-3" value="Send Message">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
<?php
  include "shears/footer.php";
?>