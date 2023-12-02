<?php
session_start();

if(isset($_POST["LOGIN"]))
{
 $name=$_POST["Username"];
 $pass=$_POST["Password"];
 $conn=mysqli_connect("localhost","root","","house");
 $sql="select * from  `user_data` where `username` = '$name' and `password` = '$pass';";
 $result=mysqli_query($conn,$sql);
 $check=mysqli_num_rows($result);
 
 if($check > 0)
 {
	$_SESSION["Username"]=$name;
 	header('location:dashboard.php');
        exit(0);
 }
 else
 {
  echo '<script type="text/javascript">
            alert("Username or Password is incorrect...Please try again!!!");
        </script>';
 }
}
else
{
 echo '<br><center><b>Please enter username and password</b></center>';
}
?>


<html>
	<style>
	input[type=submit] {
	width: 100%;
	background-color: #FF69B4;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
  //border: none;
  //border-radius: 10px;
	cursor: pointer;
	}

  input[type=submit]:hover {
  background-color:#9763C6
  }
</style>

<body bgcolor="#FFC0CB">
<center>

<br><br>
<br><br><center><h1>Login here...</h1></center>
	<br>	
<form action=" " method="POST">
  <table>
  <tr>
  <td><br><h2>Username</h2></td>
  <td><br><input type="text" name="Username" ></td>
  </tr>

  <tr>
  <td><h2>Password</h2></td>
  <td><input type="password" name="Password" ></td>
  </tr>
   

  <tr>
  <td><br><input type="submit" name="LOGIN" value="LOGIN"></td>
  </tr>

</form>
<br><a href="front.php">Back to home</a>
</center>
</body>
</html>

