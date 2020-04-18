<?php
include "header.php";
if(!isset($_SESSION['id'])){

	header("Location:http://localhost/site/videos.php");
}	
else {


if(isset($_POST['submit'])){
	include "common.php";

$name=$_FILES['file']['name'];

$tmp_name=$_FILES['file']['tmp_name'];


move_uploaded_file($tmp_name, "videos/".$name );


$allow=array('pdf');
echo $pdf_name=$_FILES['pdf']['name'];
$tmp2_name=$_FILES['pdf']['tmp_name'];


move_uploaded_file($tmp2_name, "videos/".$pdf_name );


	



$title=mysqli_real_escape_string($con, $_POST['title']);
$desc=mysqli_real_escape_string($con, $_POST['des']);
$date=date("d M, Y");
$pdf=mysqli_real_escape_string($con,$_POST['pdf']);




$sql4="INSERT INTO video(title,des,post_date,image,pdf_file)VALUES('{$title}','{$desc}','$date','{$name}','{$pdf_name}')";
$result5=mysqli_query($con,$sql4);




	 header("Location:http://localhost/site/videos.php");








}

}
?>

<div class="complete">
<h1>ADD Video:</h1>

<div class="con">
	<form class="form" action="<?php $_SERVER['PHP_SELF']?>" method="POST" enctype=multipart/form-data>
		<div class="container2">
			<label class="label">Title</label>
			<input type="text" name="title" placeholder="Enter Title" autocomplete="off">
		</div>
		<div class="container2">
		<label class="label">Description</label>
		<textarea name="des">
			
		</textarea>
		</div>
		<div class="container2">
		<label class="label" style="width: 9em;">Image</label>
		<input type="file" name="file"><br>
		</div>
		<div class="container2">
			<label>Upload (PDF-FILE)</label>
			<input type="file" name="pdf" accept="application/pdf, application/vnd.ms-excel">
		</div>
		<div class="sub">
		<input type="submit" name="submit" value="ADD">
		</div>

		
	</form>


</div>

</div>