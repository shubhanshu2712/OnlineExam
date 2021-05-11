<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         body {
            margin: 0px;
            padding: 0px;
            background: url(Images/login.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            /* font-family: 'Baloo Bhaina 2', cursive; */
            background-color: rgba(0, 0, 0, 0.329);


        }
        .navbar {
            display: inline-block;
            /* border: 3px solid white; */
            margin-left:  32%;
            margin-top: 25px;
            border-radius: 5px;
            
        }

        .navbar li {
            display: inline-block;
        }

        .navbar li a {
            color: white;
            font-size: 23px;
            padding: 33px 50px;
            text-decoration: none;
        }

        .navbar li a:hover {

            color: rgb(97, 7, 7);
            font-size: 23px;
            padding: 0px 50px;
            text-decoration: none;
            border-bottom: 2px solid orange;
            transition:1s;
        }
        .container{
            width: 730px;
            height: 700px;
            /* border: 2px solid orange ; */
            margin-left: 570px;
            background-color:rgba(0, 0, 0, 0.500);
           
        }
        .content{
            color:white;
            font-size: 24px;
            padding-left: 100px;
            
            
        }
        .content input{
            padding: 5px 27px;
            margin: 5px;
            border-radius: 5px;
            width: 52%;
            border-radius: 2px black;
            font-size: 20px;
            /* padding-left: 80px; */
            padding-top: 10px;
        }
        .content textarea{
            padding: 5px 27px;
            margin: 5px;
            border-radius: 5px;
            width: 52%;
            border-radius: 2px black;
            font-size: 20px;
            /* padding-left: 80px; */
            padding-top: 10px;
        }
        .content select{
            padding: 5px 20px;
            margin: 5px;
            border-radius: 5px;
            width: 70%;
            border-radius: 4px black;
            font-size: 20px;
            /* padding-left: 80px; */
            padding-top: 10px;
        }
        
        .btnreset {
            margin: 5px;
            color: white;
            font-size: 20px;
            padding: 14px 80px;
            border-radius: 20px;
            margin-left: 40px;
            background-color: rgb(255, 166, 0);
          
        }
        .btn {
            margin: 5px;
            color: white;
            font-size: 20px;
            padding: 14px 70px;
            border-radius: 20px;
            margin-left: 0px;
            background-color: rgb(255, 166, 0);
          
        }
   
    </style>
    
</head>
<body>
    <header style=" background-color: rgb(0,0,0); /* Fallback color */
background-color: rgba(0, 0, 0, 0.26);">
    <div class="navbar">
        <ul>
            <li><a href="index.php"> Home</a> </li>
            <li><a href="Adminlogin.php">Teacher Login</a></li>
            <li><a href="Studentlogin.php">Student Login</a></li>
        </ul>
</header>

<div class="container" >
 <center><h1><u>Registeration Form</u></h1><center>
 <form action="StuRegConf.php">
 <table class="content">
    <tr><td> User Name/ Email:</td><td> Student Name:</td></tr>

    <tr><td><input type="email" name="user" placeholder="Enter the Email" required></td><td><input type="text" name="sname" placeholder="Enter the Name" required></td></tr>
    <tr><td>Qualification:</td><td>Date of Birth:</td></tr>
    <tr><td><select name="course" required>
        <option value="BCA">BCA</option>
        <option value="B.Tech">B.Tech</option>
        <option value="B.COM">B.Com</option>
        <option value="BBA">BBA</option>
        <option value="BSC">BSC</option>
        <option value="Diploma">Diploma</option>
        <option value="MBA">MBA</option>
        <option value="B.Voc">B.Voc</option></select></td>
        

        <td><input type="date" name="dob"></td></tr>
      <tr>
          <td>Address:</td>
          <td>Gender:</td>
        </tr>
       <tr>
       <td><textarea name="addr" placeholder="Enter the Address"></textarea></td>
       <td>
           <input type="radio" name="gender" value="male">Male
           <input type="radio" name="gender" value="female">Female
       </td></tr>
           
    <tr><td>City:</td><td>State:</td></tr>

    <tr><td><input type="text" name="city" placeholder="Enter the City"></td><td><select name="state" >
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
        <option value="Assam">Assam</option>
        <option value="Bihar">Bihar</option>
        <option value="Chandigarh">Chandigarh</option>
        <option value="Chhattisgarh">Chhattisgarh</option>
        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
        <option value="Daman and Diu">Daman and Diu</option>
        <option value="Delhi">Delhi</option>
        <option value="Lakshadweep">Lakshadweep</option>
        <option value="Puducherry">Puducherry</option>
        <option value="Goa">Goa</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Haryana">Haryana</option>
        <option value="Himachal Pradesh">Himachal Pradesh</option>
        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Kerala">Kerala</option>
        <option value="Madhya Pradesh">Madhya Pradesh</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Manipur">Manipur</option>
        <option value="Meghalaya">Meghalaya</option>
        <option value="Mizoram">Mizoram</option>
        <option value="Nagaland">Nagaland</option>
        <option value="Odisha">Odisha</option>
        <option value="Punjab">Punjab</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Sikkim">Sikkim</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Telangana">Telangana</option>
        <option value="Tripura">Tripura</option>
        <option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="Uttarakhand">Uttarakhand</option>
        <option value="West Bengal">West Bengal</option>
        </select></td></tr> 

     <tr><td>Password:</td><td>Confirm Password:</td></tr>

    <tr><td><input type="password" name="pswd" required></td><td><input type="password" name="cpswd" required></td></tr>
<tr><td>Pin:</td><td>Contact No. </td></tr>
<tr><td><input type="number" name="pin" pattern="[0-9]{6}" required></td><td><input type="tel" pattern="[9-7]{3}[0-9]{7}" name="phone" required></td></tr>
    
    
</table><hr>
<script type="text/javascript">
    function clicked() {
       if (confirm('Do you want to submit?')) {
           Button.submit();
       } else {
           return false;
       }
    }

</script>
<button class="btn"onclick="clicked();" value="Button">Register</button>
<button class="btnreset">Reset</button>
</div>
</form>
<div>
<footer>
</footer>
</div>

</body>
</html>