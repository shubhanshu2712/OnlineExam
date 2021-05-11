<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url(Images/login3.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .box{
            background-color:black;
            width: 400px;
            height: 400px;
            border-radius: 5px;
            margin-top: 100px;
            box-shadow: 10px 10px crimson  ;
         }
         #login{
             color:crimson;
             padding-top: 20px;
             
         }
         .table{
             width: 300px;
             height: 180px;
            color: white;
            padding: 30px;
            font-size: 25px;
            padding: 10px;
            border: white;
                     }
                     #button{
                         width: 300px;
                         height:50px ;
                         background: yellow ;
                         border-radius: 13px;
                         font-size: 33px;
                          }
                          #td input
                          {
                         width: 300px;
                         height:43px ;
                         background: white;
                         border-radius: 13px;
                         font-size: 33px;

                          }
                        #td select
                        {
                         width: 305px;
                         height:43px ;
                         background: white;
                         border-radius: 13px;
                         font-size: 33px; 
                        }
                        
    </style>
</head> 
<body bgcolor="white">
    <form action="StudentLoginConf.php">
   <center><div class="box"><h1 id="login"> Student Login </h1><hr>
    <table class="table" id="td">
      <td><select name="usertype"><option value="member">Student</select></td></tr>
<tr><td><input type="text" name="user" placeholder="Email"></td></tr>
<tr><td><input type="password" name="pswd" placeholder="Password"></td></tr>
<?php
if(isSet($_GET['msg']))
{
$msg=$_GET['msg'];
echo"<h3 style='color:red;'>".$msg."</h3>";}

?>
</table>
 <input  style="background-color:crimson;width:125px;"type="submit" name="login" value="Login" id="button">
 <hr>
    <label style="color: white; margin-right: 120px; font-size: 17px;">
        <input type="checkbox" checked="checked" name="remember"> Remember me  </label> 
        <label style="color: white; font-size: 17px;">Forgot Password?
      </label>

   
</form>
</div></center> </body>
</html>
