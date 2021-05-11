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
    <div style="background-color:black;opacity:0.6;
     box-shadow:0px 15px 20px crimson;width:1900px;
height:878px;border:2px solid crimson;font-size:30px;overflow:scroll;">
<center><u><h2 style="color:white">Question List<h2></u></center>
<table width="1840"  border="1"cellpading="3"style="margin-left:20px;">
<tr style="color:white; background-color:crimson;font-family:Gabriola;">
<td>Q No.</td>
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
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td>
<td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td>
</tr>";
}
?>
</table>
</div>
</body>
</html>
