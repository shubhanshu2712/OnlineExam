
<?php
$ques=$_REQUEST['ques'];
$opt1=$_REQUEST['opt1'];
$opt2=$_REQUEST['opt2'];
$opt3=$_REQUEST['opt3'];
$opt4=$_REQUEST['opt4'];
$opt5=$_REQUEST['opt5'];
$con=mysqli_connect("127.0.0.1","root","","online_exam");
$query="insert into ques_mstr (ques,opt1,opt2,opt3,opt4,ans)
values('$ques','$opt1','$opt2','$opt3','$opt4','$opt5')";
$res=mysqli_query($con,$query);
if($res>0)
{
echo"<script>alert('Question Added Successfully')</script>";
}
else
{
echo"<script>alert('Eror!!!!!!!!!!!!!!!!!!!!!!!!!')</script>";
}

?>
