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
<h2>Order Summary</h2>
<p>kindly press the below button to get your food delivered.. </p>
</div>
</div>
</div>

<form method="post" action="confirm_order.php?r_id=<?php echo $_GET['r_id']; ?>">
<div style="margin-left:500px;">
<table border="2" >

<th >Item Name</th><th>Value</th><th>Count</th><th>sum</th>

<?php $val=$_GET['items'];  ?>
<?php $i=1; ?>
<?php $final_res=0; ?>
<?php $arr_c=0 ?>

<?php $total_arr =array(); ?>

<?php
while($i<=$val)
{
    ?>

    <tr>
  <?php if($_POST['food_item_'.$i]>0)
  {
      ?>
    
    <td><?php echo $_POST['food_name_'.$i]; ?></td>

    

    <td><?php echo $_POST['food_val_'.$i]; ?></td>

<td><?php echo $_POST['food_item_'.$i]; ?></td>

<?php $total_arr[$arr_c]=array($_POST['food_name_'.$i],$_POST['food_item_'.$i],$_POST['food_val_'.$i]);   $arr_c++; ?>

<?php 
$a=$_POST['food_val_'.$i];
$b=$_POST['food_item_'.$i];
$res1=$a*$b;

$final_res=$final_res+$res1;

?>

<td><?php echo $res1; ?></td>

    </tr>
    
  <?php } ?>



    <?php
    $i++;
}
?>


<?php


// $_SESSION['total_arr']=array();

// array_push($_SESSION['total_arr'],$total_arr);

for($i=0;$i<$arr_c;$i++)
{

    for($j=0;$j<3;$j++)
    {

        echo "<input type='hidden' name='order_detail_".$i."_".$j."' value='".$total_arr[$i][$j]."'>";

    }
    // echo "</br>";

}









// session_register('total_arr');



// $_SESSION["total_bill"]=$final_res;

// echo $_SESSION['total_bill'];





?>

<input type="hidden" name="bill" value="<?php echo $final_res; ?>" />


<tr><td colspan="4" ></tr>
<tr><td colspan="3">Total Bill :</td><td><?php echo $final_res ?></td></tr>


</table>
</div>
<input type="hidden" name="elements" value="<?php echo $arr_c; ?>"/>





<h3 style="margin-left:500px;"> </h3>

<div class="row">
<div class="col-md-12">
<div class="btn-wrap btn-wrap2">
<input type="submit"  onsubmit="return conf();" class="btn btn-simple" value="Confirm Order"> 
</div>
</div>
</div>

</form>

<script>

function conf()
{
    alert("hello");

    var x=confirm("Proceed to pay?");
    if(x)
    {
        return true;
    }
    else{
        return false;
    }


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