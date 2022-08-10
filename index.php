<?php
require('dbconfig.php');
extract($_POST);
if(isset($Login))
{
if($username=="" || $password=="")
{
$err="<font color='red'>fill all the fileds first</font>";  
}
else
{

$sql=mysqli_query($conn,"select * from users where username='$username'and password='$password'");

$row=mysqli_num_rows($sql);

if($row==true)
{
$_SESSION['username']=$username;
header('location:admin');
}
else
{

$err="<font color='red'  align='left'><b>Invalid login details</b></font>";

}
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CA SYSTEM</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  *{
 font-family: Georgia, serif;
  }
  body{
    background-image: url(img/3.jpg);
    background-repeat: no-repeat;
    color:black;
    height: 100vh;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
  }
h1{
  text-align: center;
  font-size:35px;
  color: white; 
  font-family: Georgia, serif;
}
h1 b i{
  color: white;
}
.img1{

}

.menu{
  float: right;
  font-size: 17px;
  text-decoration-style: none;
  font-family:  sans-serif;

 }
 .menu{
  position: absolute;
  top: 14.70%;
  left:64.7%;

  }
li{
  list-style-type: none; 
}
ul li a{
  text-decoration: none;
  color: yellow;
  padding: 6.5px;
}
ul li {
  display: inline-block;
  text-decoration: none;
}
ul li a:hover{
  background-color: white;
  color: black;
  padding: 6.5px;
  transition: 0.3s ;
}
hr.new1{
  border: 5px solid gray;
  border-radius: 2px;
}
.header1{
  background-color:rgba(0, 111, 255, 0.7);
  padding: 18px;
  word-spacing: auto ;
}
.header2{
  background-color:rgb(0, 0, 255);
  padding: 16px;
  color: white;
}
h2{
  position: absolute;
  left: 7%;
}

input[type=text], input[type=password] {
  width: 360px;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;

  font-size: 15px;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;a
}
button {
  background-color: rgb(0, 0, 255);
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:2;
}
.cancelbtn {
  padding: 14px 20px;
  background-color: gray;
}
.cancelbtn, .signupbtn {
  float: left;
  width: 180px;
}
.container {
  padding: 16px;
  position: absolute;
  top: 2%;
  left: 2px;
  font-size: 16px;
}
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}
.center{
  background-color: solid;
  height: 500px;
  width: 400px;
  border: 3px solid gray;
  position: absolute;
  top: 40%;
  left:37%;
}
 span.psw {
     display: block;
     float: right;
     position: absolute;
     top: 75%; 
     left:50%;
  }
  span.psw {
    position: absolute;
    top:72%;
    left:4%; 
}

</style>
</head>
<body>
<header class="header1">
<h1><b><i class="fa fa-calendar" aria-hidden="true"></i>&ensp;COURSE&ensp;ALLOCATION&ensp;SYSTEM</b></h1>
</header>
<header class="header2">
<div class="menu">
	<ul>
<li><a:active href=""><i class="fa fa-user-plus"></i>ADMIN LOGIN</a></li>
<li><a href="Users"><i class="fa fa-users"></i>
USER LOGIN</a></li>
<li><a href="Users/register.php"><i class="fa fa-users" aria-hidden="true"></i>
USER SIGNUP</a></li>
</u>
</div>
</header>
<div class="center">
<form method="POST">
  <caption><?php echo @$err;?></caption>
  <center><img src="img/1.svg" class="img1";height="100px;" width="100px;"></center>
  <div class="container">
  	<br><br><br>
    <label><b>College Authorities for Only Staff Members</b></label><br><br>
   <label for="username"><b>Username</b></label><br>
   <input type="text" placeholder="Enter Username" name="username" required><br>

    <label for="password"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" required><br>
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label><br>
    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit"  name="Login" class="signupbtn">Login</button>
    </div>
  </div>
  </div>
</form>
</body>

</body>
</html>