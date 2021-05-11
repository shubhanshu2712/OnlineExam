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
      </style>
</head>
<body>
<div style="width:1050px;height:700px; background-color:black;opacity:0.6;border:3px solid crimson;border-radius:5px;margin-left:350px;
box-shadow:0px 0px 5px crimson;">
<center><h1 style="color:white;font-family:Segoe Script;text-decoration:underline;">Exam
Result</h1></center>
 <table width=1000 border=1 cellspacing=0 cellpadding=3 style="margin:20px;">
<tr style="color:white; font-size:28px;font-family:Gabriola;">
<td>Student Name</td><td>Qualification</td><td>Date of Birth</td>
<td>Gender</td><td>Exam Date</td><td>Maximum Marks</td>
<td>Obtained Marks</td>
</tr>
<?php
$con=mysqli_connect("127.0.0.1","root","","online_exam");
$sql="SELECT stu_info.sname,stu_info.squa,stu_info.sdob,
stu_info.sgender,result.edate,result.maximum,result.obtained from stu_info ,result
where result.sid=stu_info.email";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($res))
{
echo"<tr style='color:white; font-size:28px;font-family:Gabriola;'>
<td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td>
<td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td>
<td>".$row[6]."</td></tr>";
}
?>
</body>
</html>
