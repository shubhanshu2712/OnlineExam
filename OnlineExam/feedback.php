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
<div style="width:500px;height:535px; background-color:black;opacity:0.6;border:3px solid crimson;border-radius:5px;
margin-left:700px;box-shadow:0px 0px 5px crimson;
">
<center><h1 style="color:white;font-family:Segoe Script;text-decoration:underline;">
Your Feedback</h1></center>
<form action="">
<input  class="input_reg" type="text" name="sub" placeholder="Your Subeject"><br><br>
<textarea  class="input_reg"  name="feed" placeholder="Your feedback" required></textarea><br><br>
<input class="btn"type="submit" value="Submit" style="margin-left:90px;">
<input class="btn"type="reset" value="Reset" style="margin-left:80px;">
</form>
</div>
<?php
if(isSet($_REQUEST['sub']))
{
$sub=$_REQUEST['sub'];
$feed=$_REQUEST['feed'];
session_start();
$user=$_SESSION['user'];
$con=mysqli_connect("127.0.0.1","root","","online_exam");
$sql="insert into feedback(sid,date,subject,message)
values('$user',curdate(),'$sub','$feed')";
$res=mysqli_query($con,$sql);
if($res>0)
{
echo"<script>alert('Thankyou for the feedback')</script>";
}
else
{
echo"<script>alert('eror!!!!!!!!!!!!!!!!!!!!!!!!!')</script>";
}
}
?>
</body>
</html>