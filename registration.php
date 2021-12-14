<?php
session_start();

header('location:loginp11.php');
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$name = $_POST['name'];
$username = $_POST['user'];
$pass1 = $_POST['password'];
$pass2 = $_POST['passwordc'];
$mob = $_POST['mobile'];
$email = $_POST['email'];

if($pass1!=$pass2)
{
	echo "Password mismatched";
	return;
}


$s = "select * from usertable where username= '$username' ";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

$sa = "select * from usertable where email= '$email' ";
$res = mysqli_query($con,$sa);
$num2 = mysqli_num_rows($res);

if($num==1){
	echo " Username Already Taken";
}
else if($num2){
	echo " Email Already Taken";
}
else
{
	$reg ="insert into usertable(name,username,password,mobile,email) values('$name','$username','$pass1','$mob','$email')";
	mysqli_query($con,$reg);
	echo" Registration Successful";
}
?>
