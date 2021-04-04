<?php
$username=$_POST['username'];//username
$password=$_POST['password'];//password 
session_start();

$con=mysqli_connect("localhost","root","","efood");
$result=mysqli_query($con,"SELECT * FROM `users` WHERE `username`='$username' && `password`='$password'");
$count=mysqli_num_rows($result);

if($count==1)
{
$_SESSION['log']=1;
header("refresh:1;url=admin_page.html");
}
else
{
echo "please fill proper details";
header("refresh:2;url=admin_login.php");
}
?>