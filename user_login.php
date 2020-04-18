<?php
if(isset($_POST['submit'])){


include "common.php";


$username=mysqli_real_escape_string($con,$_POST['user']);
$password=mysqli_real_escape_string($con,$_POST['pass']);
$sql="SELECT * FROM user WHERE username='{$username}' AND password='{$password}'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)){ 
	
	 session_start();

	 $_SESSION['uid']=$row['u_id'];
	
	  $_SESSION['username']=$row['username'];


	header("Location:http://localhost/site/videos.php");
	}

}
else{
	echo "Username and Password Not Match..!";

}
}

?>


<form class="admin-form" action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
	<div class="aform">
		<label>Username</label>
		<input type="text" name="user" placeholder="Enter Your Username" required autocomplete="off">
	</div>
	<div class="aform">
		<label>Password</label>
		<input type="password" name="pass" placeholder="Enter Your password" required>
	</div>
	<div class="subm">
	<input type="submit" name="submit" value="Login">
	</div>


</form>