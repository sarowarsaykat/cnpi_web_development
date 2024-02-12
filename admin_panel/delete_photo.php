<?php
    include "../db_connect/db_connect.php";
    $id=$_GET['id'];
    $delete=mysqli_query($con,"delete from photo_gallerys where id='$id'");
    if($delete){
        echo "<script>alert('Delete has been successfully.');location.replace('view_photo.php');</script>";
    }
    else{
        echo "<script>alert('Data not Delete')</script>";
    }
?>