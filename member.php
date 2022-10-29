<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:login.php");  
} else {  
?>  
<!doctype html>  
<html>  
<head>  
<title>Welcome</title>  
    <style>   
        body{  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color:  #1563 ;  
    color: palevioletred;  
    font-family: verdana;  
    font-size: 100%  
      
        }  
            h2 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
        h1 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
img{
	width:100%;
	border:2px solid black;
}
.div1{
	position:relative;
}
.p1{
position:absolute;
top:10px;
left:8px;
font-size:20px;
background-size:auto;
margin-y:50px;
width:150px;
}	
.p2{
position:absolute;
top:50px;
left:8px;
font-size:20px;
background-size:auto;
width:150px;
}	



              
          
    </style>  
</head>  
<body>  
    <!--<font size="5px"><center><h1 style="margin-bottom:20px;color:black">HOME PAGE</h1></center>  </font>-->
      
<font size="5px"><h2>Welcome, <?=$_SESSION['sess_user'];?>! <a style="color:red;float:right" href="logout.php">Logout</a></h2>  </font>
<!--<p>  
WE DO IT. SUCCESSFULLY CREATED REGISTRATION AND LOGIN FORM USING PHP AND MYSQL  
</p> -->

<div class="div1">
<img src="schoolbus.webp" alt="no img"/>

<!--<font size="5px"><a class="p1" href="driver.php">DRIVER</a></font>
<font size="5px"><a class="p2" href="user.php">  USER  </a></font>-->
<button class="btn p1"><a href="driver.php">DRIVER</a></button>
<button class="btn p2"><a href="user.php">USER</a></button>
</div>
</body>  
</html>  
<?php  
}  
?>  
