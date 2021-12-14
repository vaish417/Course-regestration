<?php
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$username = $_POST['user'];
$pass1 = $_POST['password'];

$s = "select * from usertable where username= '$username' && password='$pass1'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num==1){
	header('location:home.php');
}
else
{
	header('location:loginp.php');
}
?>