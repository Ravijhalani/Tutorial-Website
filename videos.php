	<?php
	include "header.php";
	include "common.php";

	$sql2="SELECT * FROM video ORDER BY id DESC";
	$result2=mysqli_query($con,$sql2);
	
	
	
	if(mysqli_num_rows($result2)>0){
		while ($row=mysqli_fetch_assoc($result2)) {
		?>

	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="video.css">
	</head>
	<body>



		<div class="comp">
			<div class="container">
				<div class="img">
					<video width="240" height="137">					

						<source src="videos/<?php echo $row['image']; ?>" type="video/mp4">
					</video>
					
					
				</div>
				<div class="title">
				<h4><a href="watch.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></h4>
					
				</div>
				<div class="desc">
					<?php echo $row['des'];?>
					
				</div>
			</div>
		</div>

		
	</body>
	</html>

	<?php


		}
	}
	?>
