<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@800&family=Baloo+Bhaina+2:wght@800&display=swap" rel="stylesheet">
    <style>
        /* CSS RESET  */
        .navbar
        {
         display: inline-block;
         /* border: 3px solid white; */
        margin-left: 2%;
         margin-top: 25px;
         border-radius: 5px;
        }
        .navbar li{
            display: inline-block;
        }
        .navbar li a{
            color: white;
            font-size: 23px;
            padding: 8px 10px;
            text-decoration: none;
        }
        .navbar li a:hover{
           
           color: grey;
           font-size: 23px;
           padding: 8px 10px;
           text-decoration: none; 
       }
.input_reg
{
width:180px;
height:40px;
}

input:focus
{
background-color:gold;
border:0px solid white;
color:black;
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

    <header>
        <div style="width:500px;height:650px; background-color:black;opacity:0.6;border:3px solid crimson;border-radius:5px;
margin-left:700px;box-shadow:0px 0px 5px crimson;
">
<center><h1 style="color:white;font-family:Segoe Script;text-decoration:underline;">
Result</h1></center>
<form action="">
<?php
session_start();
$user=$_SESSION['user'];
$con=mysqli_connect("127.0.0.1","root","","online_exam");
$sql="SELECT  stu_info.sname,stu_info.squa,stu_info.sdob,stu_info.sgender,result.edate,
result.maximum,result.obtained 
FROM stu_info,result WHERE result.sid=stu_info.email AND result.sid='$user'";
$d=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($d))
{
echo"<table width=500 height=535 style='margin-left:50px'>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td>Name=</td><td>".$row[0]."</td></tr>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td>Qualification=</td><td>".$row[1]."</td></tr>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td>Date Of Birth=</td><td>".$row[2]."</td></tr>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td>Gender=</td><td>".$row[3]."</td></tr>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td>ExameData=</td><td>".$row[4]."</td></tr>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td>Maximum Marks=</td><td>".$row[5]."</td></tr>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td>Obtained Marks=</td><td>".$row[6]."</td></tr>";
echo"</table>";
}
?>
</form>
</div>
 </header>
 </body>
</html>