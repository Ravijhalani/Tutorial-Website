<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="header.css">

</head>
<body bgcolor="wheat">
	<?php session_start(); ?>

<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="Videos.php">Videos</a>
  <a href="about.php">About</a>
  <a href="contact.php">Contact</a>
  <?php
  if(isset($_SESSION['username'])){
		?>
	<a style="float: right;" href="user_logout.php"> Hello, <?php echo $_SESSION['username'];?> Logout </a>
<?php
} 
else{
	?>


 <a style="float: right;" href="user_signup.php">Sign-Up</a>
 <a style="float: right;" href="user_login.php">Login</a>
<?php
}
  
?>  
</div>

<div style="padding-left:16px">
  
</div>

</body>
</html>
