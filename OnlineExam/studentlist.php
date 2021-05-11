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
    <div style="background-color:black;opacity:0.6;box-shadow:0px 15px 20px crimson;width:1897px;height:858px;border:2px solid crimson;overflow:scroll">
<center><u><h2 style="color:white">Student List<h2></u></center>
<table width="1540" border="1"cellpading="3"style="margin-left:150px;">
<tr style="color:white; background-color:crimson;font-family:Gabriola;font-size:30px;">
<td>Email/user</td>
<td>Student</td>
<td>Qualification</td>
<td>Date of birth</td>
<td>Gender</td>
<td>Address</td>
<td>City</td>
<td>State</td>
<td>Pin Code</td>
<td>Contact</td></tr>
<?php 
$con=mysqli_connect("127.0.0.1","root","","online_exam");
$sql="select * from  stu_info";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_array ($res))
{echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td>
<td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td>
<td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td>
<td>".$row[9]."</td></tr>";
}
?>
</table>
</div>
</body>
</html>
