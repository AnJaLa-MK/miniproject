<html>
	<head>
	  
		<style>
		.container{
			background-color: whitesmoke;
			box-shadow: 1px 1px 1px 1px grey;
			padding: 10px 0px 25px 10px;
			width: 30%;
			height: 47%;
			margin-left: 35%;
		}
		.txt{
			width: 100%;
			height: 20%;
			border: 1px solid brown;
			border-radius: 05px;
			padding: 1px 1px 5px 1px;
			margin: 1px 0px 10px 0px;
		}
		.select{
			width: 90%;
			border: 1px solid brown;
			border-radius: 05px;
			box-shadow: 1px 1px 2px 1px grey;
			padding: 10px 15px 10px 15px;
		}
        input[type=submit] {
        	width: 100%;
        	background-color: #C71585;
        	color: white;
        	padding: 14px 20px;
        	margin: 8px 0;
            border: none;
            border-radius: 10px;
        	cursor: pointer;
	}
		
		</style>
	</head>
	<body bgcolor="Chocolate">
       
				
				<br><center><b><h1><font color="white">Register here...</font></h1></b></center>
				<div class="container">
		  		<form action="" method="POST" enctype="multipart/form-data"> 
				<table>
                    <center>
					<tr>
						<td>
							<label>Name : <td><input type="text" class="txt" name="uname" value=""></td></label>
						</td>
					</tr><br>
					<tr>
						<td>
							<label>Email : <td><input type="text" class="txt" name="email" value="" required></td></label>
						</td>	
					</tr><br>
					<tr>
						<td>
							<label>Mob No : <td><input type="text" class="txt" name="mob_no" value="" required></td></label>
						</td>
					</tr><br>
					<tr>
						<td>
							<label>Set Username : <td><input type="text" class="txt" name="username" /*onclick="checkphone()*/"></td></label>
						</td>
					</tr><br>
                    <tr>
						<td>
							<label>Set Password : <td><input type="password" class="txt" name="password"></td></label>
						</td>
					</tr><br>
                    </center>
				</table>
					<br><center><input type="submit"  name="submit" value="Submit"></center>
				</form>
				</div>
                <br><br><br><br><br><br><center><font size=5 color:yellow><a href="front.php">Back to home</a></center></font>
		
	</body>
</html>

<?php

	$conn=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($conn,'house');
	if($conn){
		
	if(isset($_POST['submit']))
		{
			$name = $_POST['uname'];
			$email = $_POST['email'];
			$mob_no = $_POST['mob_no'];	
			$username = $_POST['username'];
			$password = $_POST['password'];

			$query = "INSERT INTO `user_data`(`username`, `password`, `email`, `name`, `mob_no`) VALUES ('$username','$password','$email','$name','$mob_no')";
            $query_run = mysqli_query($conn,$query);
			//echo $query_run;
	
		if($query_run)
			{
		      echo '<script type="text/javascript">
                          alert("You are successfully registered");
                      </script>';
			}
	
		else
			{
				echo '<script type="text/javascript">
                    alert("Error in entering data");
                </script>';	
			}
		}		
	}
	else{	
		echo '<script type="text/javascript">
            alert("No connection found");
        </script>';
	}
?>
