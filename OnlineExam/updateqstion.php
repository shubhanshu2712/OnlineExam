<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@800&family=Baloo+Bhaina+2:wght@800&display=swap" rel="stylesheet">
    <style>
        /* CSS RESET  */
        body{

            font-family: 'Baloo Bhai 2', cursive;
            margin: 0px;
            padding: 0px;
            background: url(Images/Student7.jpg);
            background-repeat:no-repeat ;
           background-size: 1550px 800px;  
           font-family: Baloo Bhai;  
           
        }
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

    <header>
        <div class="navbar">
        <ul>
        <li><a href=" studentlist.php"> Students</a> </li>
        <li><a href="addquestion.php">AddQuestion</a></li>
        <li><a href="updateqstion.php">UpdateQuestion</a></li>
        <li> <a href="questionlist.php">Questions</a></li>
        <li><a href="examresult.php">Result</a></li>
        <li><a href="feedbackA.php">Feedback</a></li>
       <li><a href="Changepasssword.php">Account</a></li>
        <li><a href="logout.php">Logout</a></li>
        </ul>
    </div><hr>
    </header>
    <div style="background-color:black;opacity:0.6;
     box-shadow:0px 15px 20px crimson;width:1180px;
height:500px;border:2px solid crimson;font-size:30px;overflow:scroll;">
<center><u><h2 style="color:white">Question List<h2></u></center>
<table width="1140"  border="1"cellpading="3"style="margin-left:20px;">
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
$ques=$row[1];
$opt1=$row[2];
$opt2=$row[3];
$opt3=$row[4];
$opt4=$row[5];
$opt5=$row[6];
 echo"<form action='addquestion_validation.php'>";
echo"<tr style='color:white; font-family:Gabriola;font-size:28px;'>
<td><input type=text name=ques value='$ques' ></td>
<td><input type=text name=opt1 value='$opt1' ></td>
<td><input type=text name=opt2 value='$opt2' ></td>
<td><input type=text name=opt3 value='$opt3' ></td>
<td><input type=text name=opt4 value='$opt4' ></td>
<td><input type=text name=opt5 value='$opt5' ></td>
<td><input class='btn' type='submit' name='opr' value='Update' style='margin-left:70px;'>
</tr>";
}
?>
</table>
</div>
</body>
</html>
