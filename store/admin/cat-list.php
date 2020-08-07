<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<link rel="stylesheet" href="css/style.css">

<body>
	<?php
	 include("confs/auth.php") ?>

	

	<h1>Category List</h1>
	<?php 
	include("confs/confg.php");
	$result = mysqli_query($conn, "SELECT * FROM categories");
	 ?>
	 <ul>
	 	<?php while($row = mysqli_fetch_assoc($result) ): ?>
	 		<li title="<?php echo $row['remark'] ?>">
	 		   	<a href="cat-del.php?id=<?php echo $row['id'] ?>" class="del">Del</a> 
	 		   	<a href="cat-edit.php?id=<?php echo $row['id'] ?>">edit</a>
	 			<?php echo $row['name'] ?>
	 			
	 		</li>
	 	<?php endwhile; ?>


	 </ul>
	 <a href="cat-new.php" class="new">New Category</a>

</body>
</html>