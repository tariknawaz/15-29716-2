<?php
	if(isset($_POST['submit'])){
		$name = trim($_POST["name"]);
		$email = trim($_POST["email"]);
		$username = trim($_POST["username"]);
		$password = trim($_POST["password"]);
		$confirmPassword = trim($_POST["confirmPassword"]);
		$gender=trim($_POST["gender"]);
		$dob=trim($_POST["dob"]);
		
		$c=mysqli_connect('localhost','root','','t');
		$sql="insert into user values(".$name.",'".$email."','".$username."','".$password."','".$gender."''".$dob."')";
		mysqli_query($c,$sql);
		mysqli_close($c);
		
		if($name==""){echo "Invalid.";}
		else{} 
		
		if($email==""){echo "Invalid.";}
		else{} 
		
		if($username==""){echo "Invalid.";}
		else{} 
		
		if($password==""){echo "Invalid.";}
		else{} 
		
		if($confirmpassword==""){echo "Invalid.";}
		else{} 
		
		if($gender==""){echo "Invalid.";}
		else{} 
		
		if($dob==""){echo "Invalid.";}
		else{} 	
	}
		
?>

<fieldset>
    <legend><b>REGISTRATION</b></legend>
	<form action="#" method="POST">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text">
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>User Name</td>
				<td>:</td>
				<td><input name="userName" type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" type="password"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input name="confirmPassword" type="password"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Gender</legend>    
						<input name="gender" type="radio">Male
						<input name="gender" type="radio">Female
						<input name="gender" type="radio">Other
					</fieldset>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Date of Birth</legend>    
						<input type="text" size="2" name="dob"/>/
						<input type="text" size="2" name="dob"/>/
						<input type="text" size="4" name="dob"/>
						<font size="2"><i>(dd/mm/yyyy)</i></font>
					</fieldset>
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" value="Submit">
		<input type="reset">
	</form>
</fieldset>