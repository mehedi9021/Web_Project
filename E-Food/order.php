<?php

$host = 'localhost';
$name = 'root';
$pass = '';
$db = 'efood';

$con = mysqli_connect($host, $name, $pass) or die ('Db Error');
mysqli_select_db($con,$db);

?>

<DOCTYPE html>
<html lang="en">
	
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Order</title>
<link rel="stylesheet" href="form.css">
<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">
<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
<!-- Slick -->
<link type="text/css" rel="stylesheet" href="css/slick.css" />
<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />
<!-- nouislider -->
<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />
<!-- Font Awesome Icon -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="css/allformmain.css" />
<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>

<body>

<!-- HEADER -->
<header>
<!-- header -->
<div id="header">
<div class="container">
<div class="pull-left">
<!-- Logo -->
<div class="header-logo">
<a class="logo" href="#">
<img src="./img/logo1.png" alt="">
</a>
</div>
<!-- /Logo -->
<!-- Search -->
<div class="header-search">
<form>
<input class="input search-input" type="text" placeholder="Enter your keyword">
<button class="search-btn"><i class="fa fa-search"></i></button>
</form>
</div>
<!-- /Search -->
</div>
<div class="pull-right">
<ul class="header-btns">
<!-- Account -->
<li class="header-account dropdown default-dropdown">
<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
<div class="header-btns-icon">
<i class="fa fa-user-o"></i>
</div>
<strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
</div>
<a href="#" class="text-uppercase">Login</a> / <a href="#" class="text-uppercase">Join</a>
<ul class="custom-menu">
<li><a href="http://localhost/E-Food/signup.php"><i class="fa fa-user-plus"></i>Signup</a></li>
<li><a href="http://localhost/E-Food/admin_login.php"><i class="fa fa-unlock-alt"></i>Admin Login</a></li>
</ul>
</li>
<!-- /Account -->
<!-- Mobile nav toggle-->
<li class="nav-toggle">
<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
</li>
<!-- / Mobile nav toggle -->
</ul>
</div>
</div>
<!-- header -->
</div>
<!-- container -->
</header>
<!-- /HEADER -->

<!-- NAVIGATION -->
<div id="navigation">
<!-- container -->
<div class="container">
<div id="responsive-nav">
<!-- menu nav -->
<div class="menu-nav">
<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
<ul class="menu-list">
<li><a href="index.html">Home</a></li>
<li><a href="foods.html">Foods</a></li>
<li><a href="soft_drinks.html">Soft Drinks</a></li>
<li><a href="fruits.html">Fruits</a></li>
<li><a href="baby_foods.html">Baby Foods</a></li>
<li><a href="contact_info.html">Contact Us</a></li>   
</ul>
</div>
<!-- menu nav -->
</div>
</div>
<!-- /container -->
</div>
<!-- /NAVIGATION -->

<!--FORM-->
<marquee scrolldelay="50">Warning: You have to fill up all the sections. Otherwise order won't be completed!!</marquee>
<form action="order.php" method="post">
<div class="logo"></div>
<div class="login-block">
<h1>Order Information</h1>
<input type="text" value="" placeholder="productcode" name="productcode" />
<input type="text" value="" placeholder="quantity" name="quantity" />
<input type="text" value="" placeholder="phone" name="phone" />
<input type="text" value="" placeholder="address" name="address" />
<input name="submit" type="submit" value="Confirm Order" >
</div>
</form><br><br>

<?php
if(isset($_POST ['submit'])){
$productcode = $_POST['productcode'];
$quantity = $_POST['quantity'];
$phone = $_POST['phone'];
$address = $_POST['address'];

if (!empty($productcode)){
if (!empty($quantity)){
if (!empty($phone)){
if (!empty($address)){

$q = "insert into orderr(productcode, quantity, phone, address) Value('$productcode', '$quantity', '$phone', '$address')";
$run = mysqli_query($con,$q);

if($run){
echo 'Ordered Successfully!!';

}
else{
echo'not working!!';
}
}}}}
}
?>

<!-- FOOTER -->
<footer id="footer" class="section section-grey">
<!-- container -->
<div class="container">
<!-- row -->
<hr>
<div class="row">
<div class="row">
<div class="col-md-8 col-md-offset-2 text-center">
<!-- footer copyright -->
<div class="footer-copyright">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made by @ Md. Mehedi Hasan</a>
</div>
<!-- /footer copyright -->
</div>
</div>
<!-- /row -->
</div>
<!-- /container -->
</footer>
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>


