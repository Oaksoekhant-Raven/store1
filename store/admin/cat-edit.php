<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">

	<style type="text/css">
		form label{
			display: block;
			margin-top: 8px;
		}
	</style>
	<title>document</title>
</head>
<body>
		<h1>EDIt categories</h1>

		<?php 
		include("confs/confg.php");

		$id = $_GET['id'];
		$result = mysqli_query($conn, "SELECT * FROM categories WHERE id= $id");
		$row = mysqli_fetch_assoc($result);
		?>

	<form action="cat-update.php" method="post">
		<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
		<label for="name" >Category Name</label>
		<input type="text" name="name" id="name" value="<?php echo $row['name'] ?>">


		<label for="remark" >Remark</label>
		<textarea  name="remark" id="remark"><?php echo $row['remark'] ?></textarea> 

		<br><br>
		<input type="submit" value="Update Category">


		
	</form>

</body>
</html>