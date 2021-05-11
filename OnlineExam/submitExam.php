<?php
$qid[1]=$_REQUEST['qid1'];
$ans[1]="Not submit";
$qid[2]=$_REQUEST['qid2'];
$ans[2]="Not submit";
$qid[3]=$_REQUEST['qid3'];
$ans[3]="Not submit";
$qid[4]=$_REQUEST['qid4'];
$ans[4]="Not submit";
$qid[5]=$_REQUEST['qid5'];
$ans[5]="Not submit";	
$qid[6]=$_REQUEST['qid6'];
$ans[6]="Not submit";
$qid[7]=$_REQUEST['qid7'];
$ans[7]="Not submit";
$qid[8]=$_REQUEST['qid8'];
$ans[8]="Not submit";
$qid[9]=$_REQUEST['qid9'];
$ans[9]="Not submit";
$qid[10]=$_REQUEST['qid10'];
$ans[10]="Not submit";
$qid[11]=$_REQUEST['qid11'];
$ans[11]="Not submit";
$qid[12]=$_REQUEST['qid12'];
$ans[12]="Not submit";
$qid[13]=$_REQUEST['qid13'];
$ans[13]="Not submit";
$qid[14]=$_REQUEST['qid14'];
$ans[14]="Not submit";
$qid[15]=$_REQUEST['qid15'];
$ans[15]="Not submit";
$qid[16]=$_REQUEST['qid16'];
$ans[16]="Not submit";
$qid[17]=$_REQUEST['qid17'];
$ans[17]="Not submit";
$qid[18]=$_REQUEST['qid18'];
$ans[18]="Not submit";
$qid[19]=$_REQUEST['qid19'];
$ans[19]="Not submit";
$qid[20]=$_REQUEST['qid20'];
$ans[20]="Not submit";
if(isSet($_REQUEST['ans1']))
{
$ans[1]=$_REQUEST['ans1'];
}
if(isSet($_REQUEST['ans2']))
{
$ans[2]=$_REQUEST['ans2'];
}
if(isSet($_REQUEST['ans3']))
{
$ans[3]=$_REQUEST['ans3'];
}
if(isSet($_REQUEST['ans4']))
{
$ans[4]=$_REQUEST['ans4'];
}
if(isSet($_REQUEST['ans5']))
{
$ans[5]=$_REQUEST['ans5'];
}
if(isSet($_REQUEST['ans6']))
{
$ans[6]=$_REQUEST['ans6'];
}
if(isSet($_REQUEST['ans7']))
{
$ans[7]=$_REQUEST['ans7'];
}
if(isSet($_REQUEST['ans8']))
{
$ans[8]=$_REQUEST['ans8'];
}
if(isSet($_REQUEST['ans9']))
{
$ans[9]=$_REQUEST['ans9'];
}
if(isSet($_REQUEST['ans10']))
{
$ans[10]=$_REQUEST['ans10'];
}
if(isSet($_REQUEST['ans11']))
{
$ans[11]=$_REQUEST['ans11'];
}
if(isSet($_REQUEST['ans12']))
{
$ans[12]=$_REQUEST['ans12'];
}
if(isSet($_REQUEST['ans13']))
{
$ans[13]=$_REQUEST['ans13'];
}
if(isSet($_REQUEST['ans14']))
{
$ans[14]=$_REQUEST['ans14'];
}
if(isSet($_REQUEST['ans15']))
{
$ans[15]=$_REQUEST['ans15'];
}
if(isSet($_REQUEST['ans16']))
{
$ans[16]=$_REQUEST['ans16'];
}
if(isSet($_REQUEST['ans17']))
{
$ans[17]=$_REQUEST['ans17'];
}
if(isSet($_REQUEST['ans18']))
{
$ans[18]=$_REQUEST['ans18'];
}
if(isSet($_REQUEST['ans19']))
{
$ans[19]=$_REQUEST['ans19'];
}
if(isSet($_REQUEST['ans20']))
{
$ans[20]=$_REQUEST['ans20'];
}

session_start();//activate session
$user=$_SESSION['user'];//get value from session
$con=mysqli_connect("127.0.0.1","root","","online_exam");
for($i=1;$i<=20;$i++)
{
$sql1="insert into result_mstr values( '$user','$qid[$i]','$ans[$i]',curdate())";
mysqli_query($con,$sql1);
}
$sql2="SELECT result_mstr.qid FROM ques_mstr,result_mstr WHERE
ques_mstr.qid=result_mstr.qid AND ques_mstr.ans=result_mstr.answer AND
result_mstr.sid='$user'";
$marks=0;
$r=mysqli_query($con,$sql2);
while($row=mysqli_fetch_array($r))
{
$marks=$marks+10;
}
$sql3="INSERT INTO result(sid,edate,maximum,obtained)
values('$user',curdate(),'200','$marks') ";
$i1=mysqli_query($con,$sql3);
if($i1>0)
{
header('location:stu_result.php');
}
else
{
echo"Eror in exam";
}
?>
