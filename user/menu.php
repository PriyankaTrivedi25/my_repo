<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.web3canvas.com/themeforest/listed/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2019 08:30:34 GMT -->

<?php
include "header.php";
include "connection.php";

$val=0;
?>



<div class="popular-link-set gray">
<div class="container">
<div class="detail-filter">
<p>Filter by</p>
<form class="filter-dropdown">
<select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect1" onchange="on_flip(this.value);">
<option selected disabled>Food Type</option>
<option value="1">Veg</option>
<option value="2">Non-Veg</option>
<option value="3">Both</option>

</select>

</form>
</div>

</div>
</div>
</div>


<form  method="post" id="form12" action="#">
<section class="main-block featured-wrap">
<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-md-10">
<div class="titile-block">
<h2>Menu</h2>
<p>These items are featured and rated popular by our community</p>
</div>
</div>
</div>
<?php $x=1;
$t=1;
 ?>

<?php 


								
							$id =$_GET['r_id'];	

							if(isset($_GET['veg']))
							{
								if($_GET['veg']==1)
								{
								$q1="select * from food_mapping where r_id=".$id." and is_veg=1";	
								}
								else{
									$q1="select * from food_mapping where r_id=".$id." and is_veg=0";

								}
							}
							else{

							$q1="select * from food_mapping where r_id=".$id;
						}
							$cat1=$conn->query($q1);
							// echo $cat1;
							// echo $/q1;
							// $arr1=mysql_fetch_row($cat1);

?>

<?php

while($row=$cat1->fetch_array())
{
	?>
	<?php if($x==1): ?>

<div class="row">
<?php endif; ?>
<div class="col-md-3 card-1" style="margin:50px;">
<div class="card">
<img class="card-img-top" src="<?php echo $row['path']; ?>" height="125" width="25" alt="Card image cap" >
<div class="card-body">
<a><h5 class="card-title"><?php echo $row['food_name']; ?></h5></a>
<ul class="card-rating">
<li><?php echo $row['price']; ?></li>
<!-- <li>62 ratings</li> -->
<li><i class="fa fa-circle" aria-hidden="true"></i></li>
<input type="hidden" id="food_name_<?php echo $t ?>" name="food_name_<?php echo $t ?>" value="<?php echo $row['food_name'] ?>">
<input type="hidden" id="food_item_<?php echo $t ?>" name="food_item_<?php echo $t ?>" value="0">
<input type="hidden" id="food_val_<?php echo $t ?>" name="food_val_<?php echo $t ?>" value="<?php echo $row['price'] ?>"> 
<input type="button" onclick="sub('item_<?php echo $t ?>',<?php echo $t; ?>)" value="-"/> <label  id="item_<?php echo $t ?>"  >0</label> <input type="button" onclick="add('item_<?php echo $t ?>',<?php echo $t; ?>)" value="+"/>

</ul>


</div>
<!-- <div class="card-bottom">
<p><i class="ti-location-pin"></i>SANFRANCISCO</p>
<span class="open-close_green">Open Now</span>
</div> -->
</div>
</div>


<?php if($x==3): ?>
</div>
<?php endif; ?>
<?php
$x++;
$t++;
if($x==4):
	$x=1;
endif;
}
?>
</div>
</section>

<?php

$val=$t;
?>


<div class="row">
<div class="col-md-12">
<div class="btn-wrap btn-wrap2">
	<?php if(isset($_SESSION['user'])) { ?>


<input type="submit" class="btn btn-simple" id="submit_btn"   value="Order"> 
<?php } else { ?>
	<a class="btn btn-simple" href="login/index.php">Login to Order</a> 
	<!-- <a  class="">  -->
<?php } ?>
</div>
</div>
</div>

</form>

<script type="text/javascript">




	function on_flip(val)
	{

// alert(val);

var v1=<?php echo $_GET['r_id']; ?>;

// alert(v1);

if(val=='1')
{

window.location = "menu.php?r_id="+v1+"&veg=1";

}
if(val=='2')
{
	window.location = "menu.php?r_id="+v1+"&veg=0";

}
if(val=='3')
{
	window.location = "menu.php?r_id="+v1;
}


}

	
	function add(id,t)
	{

// alert(id);
var y=document.getElementById(id).textContent;
		var x1=parseInt(y);

		// alert(x1);
		document.getElementById(id).textContent=(x1+1);

		var tempo =document.getElementById("food_item_"+t);
		var tempo2 =document.getElementById("food_name_"+t);
		tempo.value=x1+1;
		// alert(tempo.value+" "+tempo2.value);
		document.getElementById("form12").action = "detail.php?items=<?php echo $val-1; ?>&r_id=<?php echo $_GET['r_id']; ?>";
	}

	function sub(id,t)
	{

// alert(id);
var y=document.getElementById(id).textContent;
		var x1=parseInt(y);
		// alert(x1);
		if(x1>0)
		{
		document.getElementById(id).textContent=(x1-1);

		var tempo =document.getElementById("food_item_"+t);
		var tempo2 =document.getElementById("food_name_"+t);
		var tempo3=document.getElementById("food_val_"+t);
		tempo.value=x1-1;
		// alert(tempo.value+" "+tempo2.value+" "+tempo3.value);
	}
	}

	function order_it()
	{

	






	}





</script>





<?php
include "footer.php";
?>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>