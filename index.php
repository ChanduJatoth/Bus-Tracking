<!doctype html>  
<html>  
<head>  
<title>Register</title>  
    <style>   
        body{  
    
    background-color: azure ;  
    color: palevioletred;  
    font-family: verdana;  
    font-size: 100%  
      
        }  
            h1 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
         h2 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}
fieldset{
	line-height:2.8;
	width:450px;
	background-color:lavender;
	border-radius: 25px;
	box-shadow: 0 0 10px #666;
	margin-top:30px;
}
.design{
	background-image:url("block.jpg");
	background-repeat:no-repeat;
	background-position:center;
	background-size:cover;
	position:relative;
	overflow-x:hidden;
	height:100vh;
	width:100%
}
.a{
margin-top:20px;
}	
</style>  
</head>  
<body>  
<div class="design">
     
    <center><h1 style="color:black;padding-bottom:50px;font-size:30px">LOGIN OR REGISTRATION PAGE FOR BUS TRACKING SYSTEM</h1></center>  
   <center><i><b><p style="margin-top:100px;color:black"><a  href="register.php" style="color:black;font-size:20px">Register</a> | <a href="login.php" style="color:black;font-size:20px">Login</a></b></i></p>  </center>
     
<form action="" method="POST">  
<center>
    <legend>  
    <fieldset>  
        <center><h2 style="color:black">Registration Form</h2></center>   
Username: <input type="text" name="user"><br />  
Password: <input type="password" name="pass"><br />   
<input type="submit" value="Register" name="submit" />  

              
        </fieldset>  
        </legend>  
		
		<?php  
if(isset($_POST["submit"])){  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
    $con=mysqli_connect('localhost','root','','user_registration') or die(mysql_error());  
    mysqli_select_db($con,'user_registration') or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT * FROM login WHERE username='".$user."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO login(username,password) VALUES('$user','$pass')";  
  
    $result=mysqli_query($con,$sql);  
        if($result){  
    echo "<p style='color:black;font-size:20px'><b>Account Successfully Created</b></p>"; 
	
   
	
    } else {  
    echo "<p style='color:black;font-size:20px'><b>Failure!";  
	
    }  
  
    } else {  
    echo "<p style='color:black;font-size:20px'><b>That username already exists! Please try again with another.</b></p>";  
	
    }  
  
} else {  
    echo "<p style='color:black;font-size:20px'><b>All fields are required!</b></p>"; 
    
}  
}  
?>  
	</center>	
</form>  

</div>

</body>  
</html>   