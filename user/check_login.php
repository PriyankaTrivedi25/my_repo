

<?php
session_start();


include "connection.php";

$name=$_POST['login_name'];
// $add=$_POST['sp_address'];
// $con=$_POST['sp_contact'];
// $email=$_POST['log_email'];
$pwd=$_POST['login_pwd'];
// $pref=$_POST['preference_'];

// $q1="insert into customer ".$id;

// $q1 ="INSERT INTO `foodshala`.`customer` (`cust_id`, `cust_name`, `address`, `mobile_no`, `email_id`, `pwd`, `preference`) VALUES (NULL, '$_POST['sp_name']', '$_POST['sp_address']', '$_POST['sp_contact]', '$_POST['sp_email]', '$_POST['sp_pwd']', $_POST['prefernce_'])";

// $q1="INSERT INTO `foodshala`.`customer` (`cust_id`, `cust_name`, `address`, `mobile_no`, `email_id`, `pwd`, `preference`) VALUES (NULL, '$name', '$add', '$con', '$email', '$pwd', $pref)";

$q1="select * from customer where email_id='$name' and pwd='$pwd'";
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

    header("location:index.php?login_conf=1");
    // exit();
}
else{
    // $_SESSION['error_msg']="Invalid Login ID / Password";
    // header("location:index.php");
    header("location:index.php?login_conf=0");

}

?>
