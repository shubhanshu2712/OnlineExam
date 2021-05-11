<?php
$email=$_REQUEST['email'];
$name=$_REQUEST['nam'];
$qua=$_REQUEST['qua'];
$dob=$_REQUEST['dob'];
$gender=$_REQUEST['gen'];
$add=$_REQUEST['add'];
$city=$_REQUEST['city'];
$state=$_REQUEST['state'];
$pin=$_REQUEST['pin'];
$cont=$_REQUEST['cont'];
$opr=$_REQUEST['opr'];
$con=mysqli_connect("127.0.0.1","root","","online_exam");
if($opr=="Update")
{
$query1="update stu_info  set  email='$email',sname='$name',squa='$qua',
sdob='$dob',sgender='$gender',sadd='$add',scity='$city',state='$state',pin='$pin',
scont='$cont' where email='$email'";
$r=mysqli_query($con,$query1);
if($r>0)
header('location:stu_profile.php');
else 
header('location:stu_profile.php?msg=Updation failed');
}
?>
