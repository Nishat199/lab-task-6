<?php
	$username="";
	$password="";
	$err_username="";
	$err_password="";
	
	$hasError=false;
	
	if(isset($_POST["login"])){
		if(empty($_POST["username"])){
			$err_username="*Username required";
			$hasError = true;
		}
		elseif(strlen($_POST["username"]) < 6){
			$err_username="*Username must be 6 characters long";
			$hasError = true;
		}
		else{
			$username=$_POST["username"];
		}
		if(empty($_POST["password"])){
			$err_password="*Password required";
			$hasError = true;
		}
		elseif(strlen($_POST["password"]) < 8){
			$err_password="*Password must be 8 characters long";
			$hasError = true;
		}
		else{
			$password=$_POST["password"];
		}
		
		if(!$hasError){
			echo $username ." ".$password;	
		}
		else{
			//echo $err_username . "<br>";
			//echo $err_password . "<br>";
		}
	}
?>
<html>
	<head></head>
	<body>
		<?php include_once "header.php";?>
		<fieldset>
			<form action="" method="post">
				<table><tr>
						<td>Full Name:</td>
						<td><input type="text" value="<?php echo $uname?>" name="uname"></td>
						<td><span style="color:red;">*<?php echo $err_uname;?></span>
						</td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><input type="text" value="<?php echo $uname?>" name="uname"></td>
						<td><span style="color:red;">*<?php echo $err_uname;?></span>
						</td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" value="<?php echo $pass?>" name="pass"></td>
						<td><span style="color:red;">*<?php echo $err_pass;?></span>
						</td>
					</tr>
					<tr>
						<td> Confirm Password:</td>
						<td><input type="password" value="<?php echo $pass?>" name="pass"></td>
						<td><span style="color:red;">*<?php echo $err_pass;?></span>
						</td>
					</tr>
					<tr>
						<td>Gender: <?php echo $err_gender;?></td>
						<td>
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female
						</td>
						<tr>
						<td>Email:</td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td>Contact No:</td>
						<td><input type="text"></td>
					</tr>
					<td>City</td>
<td><input type="submit" value="  "> <select></select></td>
</tr>
					<tr>
						<td colspan="2" align="right">
							<input type="submit" name="ok" value="0k">
						</td>
					</tr>
				</table>
			</form>
		</fieldset>
	</body>
</html>