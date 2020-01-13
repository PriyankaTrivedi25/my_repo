<?php
session_start();
include "connection.php";
$name=$_POST['uname'];
$add=$_POST['address'];
$email=$_POST['email'];
$pwd=$_POST['password'];
$con=$_POST['number'];
$pref=$_POST['preference_'];

$q1="INSERT INTO `customer` (`cust_id`, `cust_name`, `address`, `mobile_no`, `email_id`, `pwd`, `preference`) VALUES (NULL, '$name', '$add', '$con', '$email', '$pwd', $pref)";
$res = $conn->query($q1);
echo $res;

if($res)
{
    // $_SESSION["signup_msg"]="Signup Successful";
    header("location:index.php?signup_status=1");
}
else{
    header("location:index.php?signup_status=0");
    // $_SESSION["signup_msg"]=mysql_error();
    // echo mysql_error();
}

/*
$q="INSERT INTO `user`(`uid`, `uname`, `email`, `password`, `contact`) VALUES ('','$name','$email','$pass','$phone')";

$r=mysql_query($q);
if ($r) {
	echo "Registeration successfully";
	header("location:index.php");
	
}
else{
	echo "Registeration is not successfully";
}*/
?>