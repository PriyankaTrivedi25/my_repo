<!DOCTYPE html>
<html lang="en">
<head>
	<style type="text/css">
	
	</style>
</head>

<!-- Mirrored from demo.web3canvas.com/themeforest/listed/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2019 08:30:34 GMT -->
<body>
<?php
include "header.php";
?>

<section class="hero-wrap d-flex align-items-center" style="background-image:url(images/food.jpeg);  background-repeat: no-repeat;background-size: 1400px 500px;">
<div class="container" style="margin-top: -100px">
<div class="row d-flex justify-content-center">
<div class="hero-title">
<h1 >Find your Favorite Restaurant</h1>

</div>
</div>
<div class="row">
<div class="col-md-6" style="margin-left: 270px;">
<form>
<input type="text" name="rest_name" id="rest_id" onchange="rest_change('rest_id')" placeholder="Eg: restaurants" style="height: 50px; width:600px; margin-left: -80px; float: left;">

<div class="btn-search" style="margin-top: -17px; margin-left: 100px;background-color: #f93f23">
<a href="#" name="query_anchor" id="query_anchor" class="btn btn-simple">Search →</a>
</div>
<script type="text/javascript">
	function rest_change(id)
	{

		var yo=document.getElementById(id);

		document.getElementById("query_anchor").href="index.php?name="+yo.value;
		// alert(yo.value);
		
		// alert("kjhkj");

	}

</script>

</div>
</div>



</form>

</div>
</div>
</div>
</section>
</div>
</div>

<section class="main-block featured-wrap">
<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-md-10">
<div class="titile-block">
<h2>Featured Restaurants</h2>
<p>These restaurants are featured and rated popular by our community</p>
</div>
</div>
</div>
<?php $x=1; ?>

<?php 

include "connection.php";
// echo $_SESSION['prefer'];

if(!isset($_GET['rest_name']))
{
if(isset($_SESSION['prefer']))
{
	$cv=$_SESSION['prefer'];
	if($cv=1)
	{
		$q1="select * from restaurant order by veg";
	}
	else{
		$q1="select * from restaurant order by non_veg";
	}

}
else{

$q1="select * from restaurant";
}

}
else{
	$q1="select * from restaurant where r_name like '%".$_GET['rest_name']."%'";
}

	$cat1=$conn->query($q1);



while($row=$cat1->fetch_array())
{
	?>

	<?php if($x==1){ ?>
<div class="row">
<?php } ?>

<?php if($row['is_available'] ==1) { ?>
<div class="col-md-3 card-1">
<div class="card">
<img class="card-img-top" src="<?php echo $row['path']; ?>" height="150" width="50" alt="Card image cap">
<div class="card-body">
<a href="menu.php?r_id=<?php echo $row[0]; ?>"><h5 class="card-title"><?php echo $row['r_name']; ?></h5></a>
<ul class="card-rating">
<li>4.0</li> 


<?php if($row['non_veg']==1){ ?>
<li> <img src="images/non_veg.png" height="30" width="30"> </li>
<?php } ?>
<?php if($row['veg']==1){ ?>
<li> <img src="images/veg_logo.png" height="25" width="25"> </li>
<?php } ?>
<!-- <li>62 ratings</li>
<li><i class="fa fa-circle" aria-hidden="true"></i></li>
<li>$$$$</li>
<li><i class="fa fa-circle" aria-hidden="true"></i></li>
 -->

<!-- </g></g> </svg> Restaurant </li> -->
</ul>
</div>
<div class="card-bottom">
<p><i class="ti-location-pin"></i><?php echo $row['address']; ?></p>
<span class="open-close_green">Open Now</span>
</div>
</div>

</div>
<?php } ?>

<?php
$x++;
}
?>

<?php if($x==4){ ?>

</div>
<?php  $x=1; } ?>
<!-- </div> -->

</div>
</section>








	
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
// A $( document ).ready() block.
$(document).ready(function() {

<?php

if(isset($_GET['login_conf']))
{
	if($_GET['login_conf']==0)
	{
	?>
alert("Invalid User Id/Password!!");

	<?php
	}

	// session_destroy();

}

if(isset($_GET['signup_status']))
{

	if($_GET['signup_status']==1)
	{
	?>

alert('Signup Successful :))');
	<?php

	}
	else{
		?>
		alert("Some Error Occured :(");
	<?php }
	// session_destroy();
}

// 
	
	?>


// alert("heep");

    // console.log( "ready!" );
});


</script>



<?php
include "foot.php";
?>



<!-- <footer class="main-block gray">
<div class="container-fluid">
<div class="row">
<div class="col-md-4 responsive-wrap">
<div class="location">
<i class="fa fa-map-marker" aria-hidden="true"></i>
<p>503 Sylvan Ave, Mountain View<br> CA 94041, United States</p>
</div>
</div>
<div class="col-md-4 responsive-wrap">
<div class="footer-logo_wrap">
<img src="images/footer-logo.png" alt="#" class="img-fluid">
</div>
</div>
<div class="col-md-4 responsive-wrap">
<ul class="social-icons">
<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
</ul>
</div>
</div>
<div class="row mt-5">
<div class="col-md-12">
<div class="copyright">
<p>Copyright © 2017 Listed Inc. All rights reserved</p>
<a href="#">Privacy</a>
<a href="#">Terms</a>
</div>
</div>
</div>
</div>
</footer>
 -->

</body>

<!-- Mirrored from demo.web3canvas.com/themeforest/listed/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2019 08:30:43 GMT -->
</html>