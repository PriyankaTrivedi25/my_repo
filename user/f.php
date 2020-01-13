
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Public Transportation System</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classic Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="custom/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="custom/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="custom/css/jquery-ui1.css">
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="custom/js/move-top.js"></script>
		<script type="text/javascript" src="custom/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->
</head>
<body>
<!-- banner -->

<!-- //banner -->
<!--search-->
<div class="search-page">
	<div class="container">	
		<div class="search-grids">
			
			<div class="col-md-9 search-grid-right">
				
				<div class="hotel-rooms">
					<div class="hotel-left">
					 <!-- php -->
								<!-- // include "connect.php";
								// $s_city=$_GET['s_city'];
								// $d_city=$_GET['d_city'];
								// $q="SELECT * FROM `bus` WHERE `source_city`=$s_city and `destination_city`=$d_city;";
								// $r=mysql_query($q);
								// while($arr=mysql_fetch_row($r))
								// {
							
								//  -->
								<?php  $x=1;?>

								<?php 
								while($x<5)
								{
									?>
                                <tr>
						<a href="single.php"><span class="glyphicon glyphicon-bed" aria-hidden="true"></span><td></td></a>
						
						<div class="hotel-left-grids">
							<div class="hotel-left-one">
								<a href="single.php"><img src="custom/img/b2big.gif" height= "250" width="558"/></a>
							</div>
							<div class="hotel-left-two">
								
								<a href="single.php"><h3>View available Seats</h3></a>
								<p><span><td><?=$arr[2]?></td></span><br><td><?=$arr[3]?></td></p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="hotel-right text-right">
						<h4><?=$arr[4]?>/-</h4>
						<p>Best price</p>
						<a href="seat.php?ref=<?=$arr[0]?>">Continue</a>
					</div>
					<div class="clearfix"></div>
					</tr>
				</div>
				<div class="hotel-rooms">
					<div class="hotel-left">
						
						<?php $x++; } ?>

						 <!-- php -->
			
								<!-- // } -->
						<!-- ?> -->
						
					</div>
					
				</div>
				
			</div>
			
		</div>
	</div>
</div>
<!--//search-->
<!--footer-->

<!-- //copy -->
<!-- for bootstrap working -->
	<script src="custom/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

</body>
</html>