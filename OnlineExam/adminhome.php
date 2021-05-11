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
            background: url(Images/login.jpg);
            background-repeat:no-repeat ;
           background-size: cover;  
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
            padding: 0px 20px;
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
        <nav class="navbar">
        <ul>
        <li><a href=" studentlist.php" target="sresult"> Students</a> </li>
        <li><a href="addquestion.php" target="sresult">AddQuestion</a></li>
        <li><a href="updateqstion.php" target="sresult">UpdateQuestion</a></li>
        <li> <a href="questionlist.php" target="sresult">Questions</a></li>
        <li><a href="examresult.php" target="sresult">Result</a></li>
        <li><a href="feedbackA.php" target="sresult">Feedback</a></li>
       <li><a href="Changepasssword.php"target="sresult">Account</a></li>
        <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    </header><div>
    <iframe name="sresult" height="878" width="1910"></iframe></div>
    
</body>
</html>

