<?php
include "header.php";
include "common.php";

$id=$_GET['id'];
$sql3="SELECT * FROM video WHERE id={$id}";
$run=mysqli_query($con,$sql3);
if(mysqli_num_rows($run)>0){
	while ($row=mysqli_fetch_assoc($run)) {
		?>

		<h1>You Are watching : <?php echo $row['title'];?></h1>
		<div class="full">
			<div class="video">
				<video width="915" height="517" controls>
					<source src="videos/<?php echo $row['image']; ?>" type="video/mp4">
				</video>
				
				
			</div>
			<div class="des2">
				<h3>Description</h3>
				<?php echo $row['des'];?>
				<p><a href="pdf_view.php?pdf_file=<?php echo $row['pdf_file'];?>"><?php echo $row['pdf_file'];?></a></p>
 
				
			</div>
<div class="navg">
				
				<h1> All Videos List :</h1>	
<?php
include "common.php";

$sq="SELECT * FROM video";
$run3=mysqli_query($con,$sq);


if(mysqli_num_rows($run3)>0){

	while ($rj=mysqli_fetch_assoc($run3)) {
		?>

		<table>
		
<tr>
	<td class="tgh"><a href="watch.php?id=<?php echo $rj['id'];?>"><?php echo $rj['title'];?></a></td>
</tr>

		</table>
<?php

	}

}

?>


				

			</div>
			
		</div>
		





<?php		
	
}
}



?>