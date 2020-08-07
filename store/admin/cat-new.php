<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">

	<title>New categories</title>
	<style type="text/css">
		form label{
			display: block;
			margin-top: 8px;
		}
	</style>
</head>
<body>
	<?php include("confs/auth.php") ?>

	<h1>New categories</h1>

	<form action="cat-add.php" method="post">
		<label for="name" >Category Name</label>
		<input type="text" name="name" id="name">

		<label for="remark" >Remark</label>
		<textarea  name="remark" id="remark"></textarea> 
		<br><br>
		<input type="submit" value="Add Category">


		
	</form>

</body>
</html>