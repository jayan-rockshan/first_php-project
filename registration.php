<?php 
    session_start();
//connect the database
    $con = mysqli_connect('localhost','root','');
//select the database
    mysqli_select_db($con,'loginprocess');
//get temperorly data what we submit
    $name = $_POST['username'];
    $pass = $_POST['password'];
$s = "select * from usertable where name = '$name'" ;
//store the data to the database
$result = mysqli_query($con , $s);

$num = mysqli_num_rows($result);
if ($num == 1) {
    echo 'username is already taken';
}else{
    $reg = "insert into usertable(name , password) values ('$name' , '$pass')" ;
    mysqli_query($con , $reg) ;
    header('location:home.php');
}

?>
