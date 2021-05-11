<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            box-shadow: 12px 12px rgb(248, 191, 3)  ;
         }
         #login{
             color:yellow;
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
                         text-decoration:none;
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

.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 120px;
  background-color:grey;
  color: white;
}
p{
    text-align: center;
    margin-top: 50px;
  vertical-align: bottom
}
                        
    </style>
</head> 
<body>
<center>
    <div class="box"><h1 id="login">Choose Your Role</h1>
    <hr>
<table class="table" id="td">
    <tr><td><button id="button"><a style= 'text-decoration:none;' href="Adminlogin.php">Teacher</a></button></td></tr>
    <tr><td><button id="button"><a style= 'text-decoration:none;' href="Studentlogin.php">Student</a></button></td></tr>
    <tr><td><button id="button"><a style= 'text-decoration:none;' href="Registeration.php">Register</a></button></td></tr>
</table>
   </div>
   <div class="footer">
    <footer><p>@2021 Copyright</p></footer>
   </div>
</center> 
</body>

</html>