<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.web3canvas.com/themeforest/listed/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2019 08:30:34 GMT -->

<?php
include "header.php";
?>


<?php 
if(!isset($_SESSION['u_id']))
{
    header("location:index.php");
}
?>




<section class="main-block featured-wrap">
<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-md-10">
<div class="titile-block">
<h2>Order Placed</h2>
<p>Your Order has been placed Successfully</p>
<p>Order details has been sent to your respective email..</p>
<br/>
<h5><a href="index.php">Home</a>
</h5>
</div>
</div>
</div>





<?php

include "connection.php";

// session_start();
require_once "Mail.php";

// echo $_POST['helo_var'];




$u_id=$_SESSION['u_id'];
$r_id=$_GET['r_id'];
$pay=$_POST['bill'];
// $tex=$_SESSION['order_no'];


// echo $tex[0];

include "connection.php";

$q1="INSERT INTO `order` (`order_id`, `cust_id`, `r_id`, `total_bill`) VALUES (NULL,$u_id , $r_id, $pay)";



$res= $conn->query($q1);
// echo $res;


$q2="SELECT `order_id` FROM  `order` ORDER BY `order_id` DESC LIMIT 1";
$res1=$conn->query($q2);

// echo $res1;
if($res1!=false)
{$arr1= $res1->fetch_array();

$latest= $arr1[0];

// echo $latest;
}
else{
    echo "Error";
}
$total_ele = $_POST['elements'];

// $_SESSION['total_arr']=array_diff($_SESSION['total_arr']);


// echo $total_ele;




$order_details="";


$arr2=array("email"=>$_SESSION['email'],"order"=>array(),"total"=>$pay);
$arr1=array();



for($i=0;$i<$total_ele;$i++)
{
    $temp1 =$_POST['order_detail_'.$i.'_0'];
    $temp2 =$_POST['order_detail_'.$i.'_1'];
    $temp3 =$_POST['order_detail_'.$i.'_2'];

	$a=array("name"=>$temp1,"quant"=>$temp2,"price"=>$temp3);
	array_push($arr1,$a);

    $order_details=$order_details.$temp1." ".$temp2." ".$temp3."\n";

    
    // echo $temp1." ".$temp2." ".$temp3;

    $temp_q="INSERT INTO `order_item_mapping`(`o_i_id`, `order_id`, `food_name`, `quantity`, `value`) VALUES(NULL, $latest, '$temp1', $temp2, $temp3)";
    // echo $temp_q;
    $res=$conn->query($temp_q);
    if($res==true)
    {
        // echo "yo";
    }
    else{
        echo "</br>";
        echo "Error";
    }

    // echo "</br>";

}


$order_details=$order_details."\nTotal Order of Value = ".$pay."\nThank You For Ordering from Foodshala..";

//$to=$_SESSION['email'];

$arr2["order"]=$arr1;

// array_push($arr2,"order"=>$arr1); 

$y2=json_encode($arr2);


$curl=curl_init();
curl_setopt($curl, CURLOPT_POST, 1);

$url="http://vlabs-outreach-api.herokuapp.com/mail-sender/";

curl_setopt($curl, CURLOPT_POSTFIELDS, $y2);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
   'Content-Type: application/json',
));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

$result = curl_exec($curl);
if(!$result){die("Connection Failure");}
curl_close($curl);
$y=json_decode($result,true);



?>



<?php
include "footer.php";
?>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>
