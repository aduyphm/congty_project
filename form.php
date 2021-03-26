<?php 
include_once 'connection.php';
$image_sql = 'select * from upload';
$image = mysqli_query($conn, $image_sql);
$image_r = mysqli_fetch_array($image, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="form_css.php">
</head>
<body>
	<div class = "form_to_upload">
		<form action = 'upload.php' method="post" enctype="multipart/form-data">

			<h1><span>Select image to upload:<br></span></h1>
			<input type="file"  accept="image/*" name="image" onchange="loadFile(event)">
			<input type="submit">
		</form>
	</div>
	<div class="post_review">
		<p style="text-align: center;">Your image here: <br></p>
		<img id="output" width="200">	
	</div>
	<div class="background-area">
		<div class="text-here">
			<h1>Select your background: </h1>
		</div>
		<div class = "flex-container">
			<div id="1" name = "background1" onclick="uploadImage(this.id)"><img src="database/1.png" alt="" width="150px" height="200px"></div>
			<div id="2" name = "background2" onclick="uploadImage(this.id)"><img src="database/2.png" alt="" width="150px" height="200px"></div>
			<div id="3" name = "background3" onclick="uploadImage(this.id)"><img src="database/3.png" alt="" width="150px" height="200px"></div>
			<div id="4" name = "background4" onclick="uploadImage(this.id)"><img src="database/4.png" alt="" width="150px" height="200px"></div>
			<div id="5" name = "background5" onclick="uploadImage(this.id)" onclick="renderFile(event)"><img src="database/5.png" alt="" width="150px" height="200px"></div>
		</div>
	</div>_
	<div class="submit_for_rendering">
		<button type="submit2" name = "submit2" onclick="">Submit for final result</button>
	</div>
	<div class="rendering">
		<h1>Result: </h1>
		<div class="image_result">
			<img width="300px" height="300px" name = 'result'>
		</div>
	</div>
	<script type="text/javascript">
		function uploadImage(id) {
			alert('background ' + id+ ' is selected');
		}
	</script>
	<script>
		var loadFile = function(event) {
			var image = document.getElementById('output');
			image.src = URL.createObjectURL(event.target.files[0]);
		};
		var renderFile = function(event) {
			var image = document.getElementById('result');
			image.src = URL.createObjectURL(event.target.files[0]);
		};
	</script>
</body>
</html>
