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
.input_reg
{
width:180px;
height:40px;
}

input:focus
{
background-color:gold;
border:0px solid white;
color:black;
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
margin-left:720px;box-shadow:0px 0px 5px crimson;
">
<center><h1 style="color:white;font-family:Segoe Script;text-decoration:underline;">
Add Question</h1></center>
<form action="addquestion_validation.php">
<input  class="input_reg" type="text" name="ques" placeholder="Question"><br><br>
<input  class="input_reg" type="text" name="opt1" placeholder="Option1" required><br><br>
<input  class="input_reg" type="text" name="opt2" placeholder="Option2"required><br><br>
<input  class="input_reg" type="text" name="opt3" placeholder="Option3"required><br><br>
<input  class="input_reg" type="text" name="opt4" placeholder="Option4"required><br><br>
<input  class="input_reg" type="text" name="opt5" placeholder="Answer"required><br><br>
<input class="btn"type="submit" value="Submit" style="margin-left:90px;">
<input class="btn"type="reset" value="Reset" style="margin-left:80px;">
</form>

</div>
   </header>
    
</body>
</html>
