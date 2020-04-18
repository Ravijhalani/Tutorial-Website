<?php
if(isset($_POST['submit'])){


include "common.php";
$first=mysqli_real_escape_string($con,$_POST['first']);
$last=mysqli_real_escape_string($con,$_POST['last']);
$username=mysqli_real_escape_string($con,$_POST['user']);
$password=mysqli_real_escape_string($con,$_POST['upass']);
$mobile=mysqli_real_escape_string($con,$_POST['tel']);


$city=mysqli_real_escape_string($con,$_POST['city']);
$email=mysqli_real_escape_string($con,$_POST['email']);

$sql="SELECT * FROM user WHERE username='{$username}' AND password='{$password}'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)){ 
	
	

	header("Location:http://localhost/site/videos.php");
	}

}
else{
	 $query="INSERT INTO user(first_name,last_name,username,password,mobile_no,city,email)VALUES('{$first}','{$last}','{$username}','{$password}','{$mobile}','{$city}','{$email}')";
	 if(mysqli_query($con,$query)){

	 	header("Location:http://localhost/site/videos.php");
	 }
	 else{
	 	echo "data not inserted..!";
	 }

}
}

?>


<form class="user-form" action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
	<div class="uform">
		<label>First Name</label>
		<input type="text" name="first" placeholder="Enter Your First Name" required autocomplete="off">
	</div>
	<div class="uform">
		<label>Last Name</label>
		<input type="text" name="last" placeholder="Enter Your Last name" required>
	</div>
	<div class="uform">
		<label>Username</label>
		<input type="text" name="user" placeholder="Enter Your username" required>
	</div>
	<div class="uform">
		<label>Password</label>
		<input type="password" name="upass" placeholder="Enter Your password" required>
	</div>
	
	<div class="uform">
		<label>Mobile-No</label>
		<input type="tel" name="tel" placeholder="Enter Your Mobile-No" required>
	</div>
	<div class="uform">
		<label>City</label>
		<input type="text" name="city" placeholder="Enter Your City" required>
	</div>
	<div class="uform">
		<label>E-mail Id</label>
		<input type="text" name="email" placeholder="Enter Your E-mail" required>
	</div>
	<div class="usubm">
	<input type="submit" name="submit" value="Login">
	</div>


</form>