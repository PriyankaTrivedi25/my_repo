<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Surjith S M">
<meta name="description" content="#">
<meta name="keywords" content="#">

<script src="../../cdn-cgi/apps/head/-mEFVS8y7qx5pVzWHQTCQu5gnVM.js"></script><link rel="shortcut icon" href="#">

<title>Foodshala</title>

<link rel="stylesheet" href="css/bootstrap.min.css">

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

<link rel="stylesheet" href="css/themify-icons.css">

<link rel="stylesheet" href="css/font-awesome.min.css">

<link href="css/set1.css" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="nav-menu sticky-top">
<div class="bg transition">
<div class="container-fluid fixed">
<div class="row">
<div class="col-md-12">
<nav class="navbar navbar-expand-lg">
<a class="navbar-brand" href="index.php"><img src="images/logo.png" style="height:70px;width:200px;border-radius: 8px;margin-left: 500px;"></a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="ti-menu"></span>
</button>
<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
<ul class="navbar-nav">


<?php session_start();
	 if(isset($_SESSION['user'])) { ?>
	 	<li> <h5> Welcome, <?php echo $_SESSION['user']; ?> </h5></li>
<li class="nav-item">
	<a class="nav-link" href="logout.php" >Logout</a>

</li>
<?php }  else {  ?>



<li class="nav-item">
	<a class="nav-link" href="http://localhost/foodshala/user/login/index.php">Login</a>
<!-- <a class="nav-link" href="logout.php" >Logout</a> -->
</li>

<?php } ?>

</ul>
</div>
</nav>
</div>
</div>
</div>
</div>
</div>




