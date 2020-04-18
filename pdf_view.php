<?php
include 'common.php';
session_start();
if(!isset($_SESSION['uid'])){

	echo "<h1>You are not login......!</h1>";
}	
else {
	if(isset($_GET['pdf_file']))
{
	$filename = "videos/".$_GET['pdf_file']; 
  // Header content type 
header("Content-type: application/pdf"); 
  
header("Content-Length: " . filesize($filename)); 
  
// Send the file to the browser. 
readfile($filename);
}
}
	

 ?>
