<?php
$host = 'localhost';
$name = 'root';
$pass = '';
$db = 'smart krishi';

$con = mysqli_connect($host, $name, $pass) or die ('Db Error');
mysqli_select_db($con,$db);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<!-- Title -->
<title>কৃষকের অভিযোগ</title>
<!-- Favicon -->
<link rel="icon" href="img/core-img/favicon.ico">
<!-- Core Stylesheet -->
<link rel="stylesheet" href="style1.css">
</head>

<body>

<!-- Preloader -->
<div class="preloader d-flex align-items-center justify-content-center">
<div class="spinner"></div>
</div> 

<!-- ##### Header Area Start ##### -->
<header class="header-area">
<!-- Navbar Area -->
<div class="famie-main-menu">
<div class="classy-nav-container breakpoint-off">
<div class="container">
<!-- Menu -->
<nav class="classy-navbar justify-content-between" id="famieNav">
<!-- Nav Brand -->
<a href="homepage.php" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>
<!-- Navbar Toggler -->
<div class="classy-navbar-toggler">
<span class="navbarToggler"><span></span><span></span><span></span></span>
</div>
<!-- Menu -->
<div class="classy-menu">
<!-- Close Button -->
<div class="classycloseIcon">
<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
</div>
<!-- Navbar Start -->
<div class="classynav">
<ul>
<li><a href="homepage.html"><img src="./img/core-img/homepage.png"></a></li>
<li><a href="crop_list.html">ফসল তালিকা</a></li>
<li><a href="#">সেবা ও পরামর্শ</a>
<ul class="dropdown">
<li><a href="crops/paddy.html">ধান</a></li>
<li><a href="crops/wheat.html">গম</a></li>
<li><a href="crops/jute.html">পাট</a></li>
<li><a href="crops/mustard.html">সরিষা</a>
<li><a href="crops/potato.html">আলু</a>
<li><a href="crops/sugarcane.html">আখ</a></li>
</ul>
</li>
<li><a href="#">অনলাইন চিকিৎসা</a>
<ul class="dropdown">
<li><a href="disease/paddy.html">ধান</a></li>
<li><a href="disease/wheat.html">গম</a></li>
<li><a href="disease/jute.html">পাট</a></li>
<li><a href="disease/mustard.html">সরিষা</a>
<li><a href="disease/potato.html">আলু</a>
<li><a href="disease/sugarcane.html">আখ</a></li>
</ul>
</li>
<li><a href="govt_information.html">সরকারি তথ্য</a></li>
<li><a href="http://localhost/Smart-Krishi/farmer_report.php">কৃষকের অভিযোগ</a></li>
</ul>
<!-- Search Icon -->
<div id="searchIcon">
<i class="icon_search" aria-hidden="true"></i>
</div>
<!-- Navbar End -->
</div>
</nav>
<!-- Search Form -->
<div class="search-form">
<form action="#" method="get">
<input type="search" name="search" id="search" placeholder="এখানে লিখুন এবং খুজুন">
<button type="submit" class="d-none"></button>
</form>
<!-- Close Icon -->
<div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
</div>
</div>
</div>
</header>
<!-- ##### Header Area End ##### -->

<!-- ##### Breadcrumb Area Start ##### -->
<div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('img/bg-img/4.jpg');">
<div class="container h-100">
<div class="row h-100 align-items-center">
<div class="col-12">
<div class="breadcrumb-text">
<h2>পরিমিত সেচ দেই, অধিক ফসল ঘরে নেই</h2>
</div>
</div>
</div>
</div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Farmer Report Area Start ##### -->
<div class="box">
<section class="farmer-report-area">
<div class="container">

<style>
php, body {
min-height: 100%;
}
body, div, form, input, select { 
padding: 0;
margin: 0;
outline: none;
font-family: Roboto, Arial, sans-serif;
font-size: 14px;
color: #666;
line-height: 22px;
}
h3
{
font-size:19px;
}
h4 {
margin: 15px 0 4px;
font-weight: 400;
font-size: 14px;
}
h4 {
margin: 20px 0 4px;
font-weight: 400;
}
span {
color: red;
}
.small {
font-size: 10px;
line-height: 18px;
}
.testbox {
display: flex;
justify-content: center;
align-items: center;
height: inherit;
padding: 3px;
}
input {
width: calc(100% - 10px);
padding: 5px;
border: 1px solid #ccc;
border-radius: 3px;
vertical-align: middle;
}
input:hover, textarea:hover, select:hover {
outline: none;
border: 1px solid #095484;
background: #e6eef7;
}
.title-block select, .title-block input {
margin-bottom: 10px;
}
select {
padding: 7px 0;
border-radius: 3px;
border: 1px solid #ccc;
background: transparent;
}
select, table {
width: 100%;
}
option {
background: #fff;
}
.day-visited, .time-visited {
position: relative;
}
input[type="date"]::-webkit-inner-spin-button {
display: none;
}
input[type="time"]::-webkit-inner-spin-button {
margin: 2px 22px 0 0;
}
.day-visited i, .time-visited i, input[type="date"]::-webkit-calendar-picker-indicator {
position: absolute;
top: 8px;
font-size: 20px;
}
.day-visited i, .time-visited i {
right: 5px;
z-index: 1;
color: #a9a9a9;
}
[type="date"]::-webkit-calendar-picker-indicator {
right: 0;
z-index: 2;
opacity: 0;
}
.question-answer label {
display: block;
padding: 0 20px 10px 0;
}
.question-answer input {
width: auto;
margin-top: -2px;
}
th, td {
width: 18%;
padding: 15px 0;
border-bottom: 1px solid #ccc;
text-align: center;
vertical-align: unset;
line-height: 18px;
font-weight: 400;
word-break: break-all;
}
.first-col {
width: 50%;
text-align: left;
}
textarea {
width: calc(100% - 6px);
}
.btn-block {
margin-top: 20px;
text-align: center;
}
button {
width: 130px;
padding: 10px;
border: none;
-webkit-border-radius: 5px; 
-moz-border-radius: 5px; 
border-radius: 5px; 
background-color: #095484;
font-size: 16px;
color: #fff;
cursor: pointer;
}
button:hover {
background-color: #0666a3;
}
@media (min-width: 568px) {
.title-block {
display: flex;
justify-content: space-between;
}
.title-block select {
width: 30%;
margin-bottom: 0;
}
.title-block input {
width: 31%;
margin-bottom: 0;
}
th, td {
word-break: keep-all;
}
}
</style>

<!--Report Form-->
<div class="testbox">
<form action="farmer_report.php" method="post">
<br><br><h3><b>আপনার অভিযোগ জানাতে নিম্নোক্ত ফরমটি পূরন করুনঃ</b></h3><br>
<h4>নামঃ<span>*</span></h4>
<input type="text" name="name" />
<h4>লিঙ্গ<span>*</span></h4>
<select name="gender">
<option value="পুরুষ">পুরুষ</option>
<option value="মহিলা">মহিলা</option>
</select>
<h4>জেলাঃ<span>*</span></h4>
<input type="text" name="district" />
<h4>উপজেলাঃ<span>*</span></h4>
<input type="text" name="subdistrict"/>
<h4>গ্রামঃ<span>*</span></h4>
<input type="text" name="village"/>
<h4>মোবাইল/টেলিফোন নম্বরঃ<span>*</span></h4>
<input type="text" name="phone"/>
<h4>অভিযোগঃ<span>*</span></h4>
<textarea rows="5" name="report"></textarea>
<div class="btn-block">
<button type="submit" name="submit">সাবমিট করুন</button>
</div><br>
</form>
</div>
</section>
</div>
<!-- #####Farmer Report Area End ##### -->

<?php
if(isset($_POST ['submit'])){
$name = $_POST['name'];
$gender = $_POST['gender'];
$district = $_POST['district'];
$subdistrict = $_POST['subdistrict'];
$village = $_POST['village'];
$phone = $_POST['phone'];
$report = $_POST['report'];

if (!empty($name)){
if (!empty($district)){
if (!empty($subdistrict)){
if (!empty($village)){
if (!empty($phone)){
if (!empty($report)){

$q = "insert into farmer_report(name, gender, district, subdistrict, village, phone, report) Value('$name', '$gender', '$district', '$subdistrict', '$village', '$phone', '$report')";
$run = mysqli_query($con,$q);

if($run){
echo 'আপনার অভিযোগটি দাখিল করা হয়েছে!!';
}
else{
echo'দুঃখিত আপনার অভিযোগটি দাখিল হয়নি। আবার চেষ্টা করুন!!';
}
}}}}}}}
?>

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
<!-- Copywrite Area-->
<div class="copywrite-area">
<div class="container">
<div class="copywrite-text">
<div class="row align-items-center">
<div class="col-md-6">
<p>
পরিকল্পনা ও বাস্তবায়নে @ মো. মেহেদী হাসান
</p>
</div>
</div>
</div>
</div>
</div>
</footer>
<!-- ##### Footer Area End ##### -->

<!-- ##### All Javascript Files ##### -->
<!-- jquery 2.2.4-->
<script src="js/jquery.min.js"></script>
<!-- Popper js -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- Owl Carousel js -->
<script src="js/owl.carousel.min.js"></script>
<!-- Classynav -->
<script src="js/classynav.js"></script>
<!-- Wow js -->
<script src="js/wow.min.js"></script>
<!-- Sticky js -->
<script src="js/jquery.sticky.js"></script>
<!-- Magnific Popup js -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Scrollup js -->
<script src="js/jquery.scrollup.min.js"></script>
<!-- Jarallax js -->
<script src="js/jarallax.min.js"></script>
<!-- Jarallax Video js -->
<script src="js/jarallax-video.min.js"></script>
<!-- Active js -->
<script src="js/active.js"></script>

</body>
</html>