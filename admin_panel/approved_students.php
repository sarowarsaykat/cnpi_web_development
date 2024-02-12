<?php
include "../db_connect/db_connect.php";
$id = $_GET['id'];
$sql ="update all_students_info set is_approved ='1' where id='$id'";
$result = mysqli_query($con, $sql);
if($result){
    echo "<script>alert('Student has been approved'); location.replace('students_info.php');</script>";
}
?>