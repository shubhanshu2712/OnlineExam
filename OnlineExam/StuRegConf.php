<?php
$user=$_REQUEST["user"];
$sname=$_REQUEST["sname"];
$course=$_REQUEST["course"];
$dob=$_REQUEST["dob"];
$addr=$_REQUEST["addr"];
$gender=$_REQUEST["gender"];
$city=$_REQUEST["city"];
$state=$_REQUEST["state"];
$pswd=$_REQUEST["pswd"];
$cpswd=$_REQUEST["cpswd"];
$pin=$_REQUEST["pin"];
$phone=$_REQUEST["phone"];
$con= mysqli_connect("127.0.0.1","root","","online_exam");
$query1= "INSERT INTO stu_info (email,sname,squa,sgender,sdob,sadd,scity,state,pin,scont)values('$user','$sname','$course','$gender','$dob','$addr','$city','$state','$pin','$phone')";
$query2= "INSERT INTO login(email,password,usertype)values('$user','$pswd','member')";
$res1=mysqli_query($con,$query1);
$res2=mysqli_query($con,$query2);
if($res1>0 && $res2>0)
//echo "<h2>Student Registered Successfully</h2>";
header('location: Studentlogin.php');
else
echo "<h2>Error in Registration</h2>";
?>