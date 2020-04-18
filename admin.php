<?php
session_start();
if(isset($_SESSION['id'])){

include "common.php";
include "header.php";



?>
<div class="top" style="width: 5em;  height: 3em; float: right; font-size: 2em; text-decoration: none;" >
<a class="log" href="logout.php">Logout</a>
</div>
<?php
}
else{
	header("Location:http://localhost/site/login.php");
}
?>


