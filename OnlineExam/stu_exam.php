<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* CSS RESET  */
        body{
            margin: 0px;
            padding: 0px;
            background: url(Images/1.jpg);
            background-repeat:no-repeat ;
            background-size: cover;
            }
        .btn {
            margin: 5px;
            color: white;
            font-size: 20px;
            padding: 14px 80px;
            border-radius: 20px;
            margin-left:50px;
            background-color: crimson;
          
        }
        div{
            background-color:black;
            opacity:0.6;
            box-shadow:0px 15px 20px crimson;
            width:100%;
            height:879px;
            border:2px solid crimson;
            overflow:scroll;
        }

    </style>
</head>
<body>
<div>
<center><u><h1 style="color:crimson">Question Paper<h1></u></center>
<form action="submitExam.php">
<center>
<table width="1000" cellspacing="0" cellpadding="5" border="1" >
<?php
session_start();
$user=$_SESSION['user'];
$con=mysqli_connect("127.0.0.1","root","","online_exam");
$qry="select  * from result where sid='$user'";
$r=mysqli_query($con,$qry);
if($re=mysqli_fetch_array($r))
{
echo"<script>alert('Your Exam has been completed. For re-exam contact to Admin')</script>";
}
else
{
$sql="select * from ques_mstr";
$res=mysqli_query($con,$sql);
$count=0;
while($row=mysqli_fetch_array($res))
{
$qid=$row[0];
$ques=$row[1];
$opt1=$row[2];
$opt2=$row[3];
$opt3=$row[4];  
$opt4=$row[5];
echo"<input type=hidden  name=qid".++$count." value=".$qid.">";
echo"<tr style='color:gold;font-family:Gabriola;font-size:20px;'><td colspan=2>
<b>Ques &nbsp".$count."</b> &nbsp&nbsp".$ques."</td></tr>";
echo"<tr style='color:white;font-family:Gabriola;font-size:20px;'>
<td><input type=radio name=ans".$count." value='".$opt1."'>".$opt1."</td>
<td><input type=radio name=ans".$count." value='".$opt2."'>".$opt2."</td></tr>";
echo"<tr style='color:white;font-family:Gabriola;font-size:20px;'>
<td><input type=radio name=ans".$count." value='".$opt3."'>".$opt3."</td>
<td><input type=radio name=ans".$count." value='".$opt4."'>".$opt4."</td></tr>";
if($count==20)
break;
}
}
?>
</table>
<?php 
echo"<tr><td><input type=submit name=submit value=Submit class=btn>
<input type=submit name=reset 
 value=Reset class=btn></td></tr>";
?>
</center>

</form>
</div>
</body>
</html>

