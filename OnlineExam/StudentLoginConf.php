<?php
$user=$_REQUEST['user'];
$pswd=$_REQUEST['pswd'];
$con=mysqli_connect("127.0.0.1","root","","online_exam");
$query="SELECT email FROM login WHERE email='$user' AND password='$pswd' AND usertype='member' ";
$res=mysqli_query($con,$query);
if($r=mysqli_fetch_array($res))
{
    session_start();
    $_SESSION['user']=$user;
    header("location:Student.php");
}
else
{
    header("location:index.php?error=INVALID USER id OR PASSWORD");
}