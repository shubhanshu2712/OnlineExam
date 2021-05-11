<?php
session_start();
if(!isSet($_SESSION['user']))
{
echo"<script>alert('Please login firstly')</script>";
header('location:index.php');
} 
?>


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
            background: url(Images/login.jpg);
            background-repeat:no-repeat ;
            background-size: cover;
           
             
           
        }
        .navbar
        {
         display: inline-block;
         
         margin-left: 2%;
         margin-top: 25px;
         border-radius: 5px;
         /* position: fixed; */
        }
        .navbar li{
            display: inline-block;
        }
        .navbar li a{
            color: white;
            font-size: 23px;
            padding:  60px;
            text-decoration: none; 
        }
        .navbar li a:hover{
           
            color: grey;
            font-size: 23px;
            padding:  60px;
            text-decoration: none; 
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
        <ul>
        <li><a href="stu_profile.php"target="sresult"> Profile</a> </li>
        <li><a href="stu_exam.php"target="sresult">Exam</a></li>
        <li><a href="stu_result.php" target="sresult">Result</a></li>
        <li> <a href="feedback.php"target="sresult">Feedback</a></li>
        <li> <a href="stu_password.php"target="sresult">Change Password</a></li>
        <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <div>
    <iframe name="sresult" height="878" width="1915"></iframe>
    </div>
    </header>
    
</body>
</html>
