<?php 
$user=$_REQUEST['email'];
$pswd=$_REQUEST['pswd'];
$con=mysqli_connect("127.0.0.1","root","","online_exam");
$query="select email from login where email='$user' and
password='$pswd' and usertype='Admin' ";
session_start();
$_SESSION['user']=$user;
$res=mysqli_query($con,$query);
if($r=mysqli_fetch_array($res))
{

header("location:AdminHome.php");
}
else
{
header("location:Adminlogin.php?msg=Invalid user or password");
}
?>
