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
       .btn
{
width:120px;
height:40px;
background-color:crimson;
border-radius:5px;
border:black;
color:white;
font-size:20px;
margin-left:580px;
}
.btn:hover
{
color:black;
background-color:crimson;
box-shadow:0px 10px 10px gold;
font-size:30px;
}
      </style>
</head>
<body>
    <div style="background-color:black;opacity:0.6;
     box-shadow:0px 15px 20px crimson;width:1900px;
height:850px;border:2px solid crimson;font-size:30px;overflow:scroll;">
<center><u><h2 style="color:white">Question List<h2></u></center>
<table width="1140"  border="1"cellpading="3"style="margin-left:300px;">
<tr style="color:white; background-color:crimson;font-family:Gabriola;">
<td>Q ID</td>
<td>Question</td>
<td>Option1</td>
<td>Option2</td>
<td>Option3</td>
<td>Option4</td>
<td>Answer</td></tr>
<?php 
$con=mysqli_connect("127.0.0.1","root","","online_exam");
$sql="select * from  ques_mstr";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_array ($res))
{
$sid=$row[0];    
$ques=$row[1];
$opt1=$row[2];
$opt2=$row[3];
$opt3=$row[4];
$opt4=$row[5];
$opt5=$row[6];
 echo"<form action='addquestion_validation.php'>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td><input name=ques value='$sid' ></td>
<td><input type=text name=ques value='$ques' ></td>
<td><input type=text name=opt1 value='$opt1' ></td>
<td><input type=text name=opt2 value='$opt2' ></td>
<td><input type=text name=opt3 value='$opt3' ></td>
<td><input type=text name=opt4 value='$opt4' ></td>
<td><input type=text name=opt5 value='$opt5' ></td>
</tr>";
}
echo"<tr><td colspan='7'><input class='btn' type='submit' name='opr' value='Update'></td></tr>"
?>
</table>
</div>
</body>
</html>
