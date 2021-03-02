<?php 
    session_start();
//connect the database
    $con = mysqli_connect('localhost','root','');
//select the database
    mysqli_select_db($con,'loginprocess');
//get temperorly data what we submit
    $name = $_POST['username'];
    $pass = $_POST['password'];
//check the data items are matching
$s = "select * from usertable where name = '$name' && password = '$pass' " ;
$result = mysqli_query($con , $s);

$num = mysqli_num_rows($result);
if ($num == 1) {
    header('location:home.php');
}else{
    header('location:signin.php');
 }

?>
