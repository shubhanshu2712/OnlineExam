<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* CSS RESET  */
    
.input_reg
{
width:180px;
height:40px;
}

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

.div_form
{
width:600px;
height:700px;
background-color:black;
box-shadow:0px 0px 5px crimson;
margin-top:30px;
margin-left:400px;
opacity:0.9;
}


.input_reg
{
margin-left:50px;
width:400px;
height:40px;
border:0px solid white;
border-radius:5px;
} 
																																																																										

</style>
</head>
<body>
<div style="width:500px;height:750px; background-color:black;opacity:0.6;border:3px solid crimson;border-radius:5px;
margin-left:700px;box-shadow:0px 0px 5px crimson;
">
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
echo"<form action=updateProfile.php>";
echo"<table width=500 height=535 style='margin-left:50px;'>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td><b>Email:</b></td><td>".$row[0]."</td></tr>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td><b>Name:</b></td><td>".$row[1]."</td></tr>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td><b>Qualificationl:</b></td><td>".$row[2]."</td></tr>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td><b>Date of Birth:</b></td><td>".$row[3]."</td></tr>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td><b>Gender:</b></td><td>".$row[4]."</td></tr>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td><b>Address:</b></td><td>".$row[5]."</td></tr>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td><b>City:</b></td><td>".$row[6]."</td></tr>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td><b>State:</b></td><td>".$row[7]."</td></tr>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td><b>Pin:</b></td><td>".$row[8]."</td></tr>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td><b>Phone No:</b></td><td>".$row[9]."</td></tr><br><br>";
echo"<tr><td colspan='2'><input class='btn' type='submit' value='Edit' style='margin-left:150px;'></td></tr>";
echo"</table>";
echo"</form>";
}
?>
</div>
</body>
</html>

