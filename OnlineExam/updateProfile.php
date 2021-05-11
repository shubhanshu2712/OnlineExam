<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* CSS RESET  */



.btn
{
width:120px;
height:40px;
background-color:crimson;
border-radius:5px;
border:black;
color:white;
font-size:20px;
margin-left:90px;
}
.btn:hover
{
color:black;
background-color:crimson;
box-shadow:0px 10px 10px gold;
font-size-30px;
}



input
{
width:200px;
height:40px;
border:0px solid white;
border-radius:5px;
} 
 
																																																																										

</style>
</head>
<body>
<div style="width:550px;height:700px; background-color:black;opacity:0.6;border:3px solid crimson;border-radius:5px;
margin-left:550px;box-shadow:0px 0px 5px crimson;">
<center><h1 style="color:white;font-family:Segoe Script;text-decoration:underline;">
Your Profile</h1></center>
<?php
session_start();
$user=$_SESSION['user'];
$con=mysqli_connect("127.0.0.1","root","","online_exam");
$sql="select * from stu_info where email='$user'";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($res))
{
$email=$row[0];
$name=$row[1];
$qua=$row[2];
$dob=$row[3];
$gender=$row[4];
$add=$row[5];
$city=$row[6];
$state=$row[7];
$pin=$row[8];
$cont=$row[9];
echo"<form action='profile_val.php'>";
echo"<table width=700 height=535 style='margin-left:50px;'>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td><b>Email:</b></td><td><input type=email name=email value='$email'></td></tr>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td><b>Name:</b></td><td><input type=text name=nam value='$name'></td></tr>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td><b>Qualificationl:</b></td><td><input type=text name=qua value='$qua'></td></tr>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td><b>Date of Birth:</b></td><td><input type=date name=dob value='$dob'></td></tr>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td><b>Gender:</b></td><td><input type=text name=gen value='$gender'></td></tr>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td><b>Address:</b></td><td><input type=text name=add value='$add'></td></tr>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td><b>City:</b></td><td><input type=text name=city value='$city'></td></tr>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td><b>State:</b></td><td><input type=text name=state value='$state'></td></tr>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td><b>Pin:</b></td><td><input type=number name=pin value='$pin'></td></tr>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td><b>Phone No:</b></td><td><input type=number name=cont value='$cont'></td></tr><br>";
echo"<tr><td colspan='2'><input class='btn' type='submit' name='opr' value='Update' style='margin-left:150px;'></td>
</tr>";
echo"</table>";
echo"</form>";
}
?>
</div>
</body>
</html>
