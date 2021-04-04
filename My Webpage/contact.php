<?php
$host = 'localhost';
$name = 'root';
$pass = '';
$db = 'info';

$con = mysqli_connect($host, $name, $pass) or die ('Db Error');
mysqli_select_db($con,$db);
?>

<DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>Contact Me</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
    
<div class="nevigation">
<img id="logo" src="img/3.jpg"/>
<a class="active" style="margin-left: 50px;background-color:#5860FC;">Dashboard</a>
<div class="nevigation-right">
<a href="index.html">About Us</a>
<a href="http://localhost/My-Webpage/contact.php">Contact Me</a>
</div>
</div>
<div class="container">
<img src="img/1.jpg" alt="Snow" style="width:100%; height: 150px;">
<div class="centered">
<p>Contact Me</p><br>
<p>Contact with your information</p></div>
</div>

<div id="center_maker">
<br><br>
<div class="container2">

<form action="contact.php" method="post">
<label for="fname">First Name</label>
<input type="text" name="fname">
<label for="lname">Last Name</label>
<input type="text" name="lname">
<label for="email">Email</label>
<input type="text"  name="email">
<label for="country">Country</label>
<select id="country" name="country">
<option value="bangladesh">Bangladesh</option>
<option value="australia">Australia</option>
<option value="canada">Canada</option>
<option value="usa">USA</option>
</select>
<label for="message">Message</label>
<textarea id="message" name="message" style="height:200px"></textarea>
<input name="submit" type="submit" value="Send">
</form>

</div>
</div>

<?php
if(isset($_POST ['submit'])){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$country = $_POST['country'];
$message = $_POST['message'];

if (!empty($fname)){
if (!empty($lname)){
if (!empty($email)){
if (!empty($country)){
if (!empty($message)){
    
$q = "insert into user(fname, lname, email, country, message) Value('$fname', '$lname', '$email', '$country','$message')";
$run = mysqli_query($con,$q);
if($run){
echo 'done!! ';
}
}}}}}}
?>

<div class="footer">
<br><p>Contact me at</p>
<p>mehedi15-9021@diu.edu.bd</p><br>
</div>

</body>
</html>
	

