<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Display form</title>
</head>
<body>
	<h1>Your personal in4</h1>
	<q>Make sure that those in4 are all authentic and precise</q>
	<?php 
		$name = $_POST['name'];
		$uni = $_POST['Uni'];
		$class = $_POST['class'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$facebook = $_POST['facebook'];
		$image = $_POST['filetoupload'];
		$dob = $_POST['dob'];
		echo "<br> $name";
		echo "<br>$uni";
	 ?>
</body>
</html>