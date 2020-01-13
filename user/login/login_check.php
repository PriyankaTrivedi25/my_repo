<?php
session_start();
include"connection.php";
$email=$_POST["email"];
$password=$_POST["password"];
$q1="select * from customer where email_id='$email' and pwd='$password'";
$res = $conn->query($q1);
// echo $res;
$row=$res->fetch_array();

if($row>0)
{
    // echo "true";
    // session_destroy();
    // session_start();
    $_SESSION['user']=$row[1];
    $_SESSION['u_id']=$row[0];
    $_SESSION['email']=$name;
    $_SESSION['prefer']=$row[6];

    echo $_SESSION['prefer'];

    // if(isset($_SESSION['user']))
    // {
    //     echo $_SESSION['user']. " ".$row[0];
    // }

    header("location:../index.php?login_conf=1");
    // exit();
}
else{
    // $_SESSION['error_msg']="Invalid Login ID / Password";
    // header("location:index.php");
    header("location:../index.php?login_conf=0");

}


?>