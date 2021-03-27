<?php 
include_once 'connection.php';
$image_result_sql = 'select * from upload order by id desc limit 1';
$image_result = mysqli_query($conn, $image_result_sql);
$row = $image_result->fetch_assoc();
// echo $row['links'];
$message = "";

// upload.php
if (isset($_POST['submit'])) {
	$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
// echo $target_file;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if($check !== false) {
    $message = "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    $message = "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  $message = "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["image"]["size"] > 500000) {
  $message = "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $message = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  $message = "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    $message = "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded."."<br> Feel free to select your background";
    $name = $_FILES['image']['name'];
    $links = $target_file;
    $type = $_FILES['image']['type'];
    $sql_insert_data = "insert into upload(name, links, type) values('$name', '$links', '$type');";
    mysqli_query($conn, $sql_insert_data);
  } else {
    $message = "Sorry, there was an error uploading your file.";
  }
}
}

	$image_source_result = "result/unnamed.jpg";
	$image_background_result = "";
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
		<form action = '' method="post" enctype="multipart/form-data">

			<h1><span>Select image to upload:<br></span></h1>
			<input type="file"  accept="image/*" name="image" onchange="loadFile(event)">
			<input type="submit" name = 'submit'>
		</form>
	</div>
	<div class="post_review">
		<p style="text-align: center;"><?php if(isset($_POST['submit'])) {
			echo $message;
		} ?></p>
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
			<div id="5" name = "background5" onclick="uploadImage(this.id)"><img src="database/5.png" alt="" width="150px" height="200px"></div>
		</div>
	</div>_
	<div class="submit_for_rendering">
<!-- 		<form action="" name = 'submit2' method = "post"> -->
			<button type="submit2" name = "submit2" onclick="renderFile()">Submit for final result</button>
		<!-- </form> -->
	</div>
	<div class="rendering">
		<h1>Result: </h1>
		<div class="image_result">
			<img width="300px" height="300px" id = 'result' src = "<?php echo $image_source_result?>" style = "visibility: hidden;">
		</div>
	</div>
	<script type="text/javascript">
		function uploadImage(id) {
			alert('Background ' + id + ' is selected.' + 'Congratulations. You are at the last step. Just submit your choice and a surprising thing will be shown');
		}
	</script>
	<script>
		var loadFile = function(event) {
			var image = document.getElementById('output');
			image.src = URL.createObjectURL(event.target.files[0]);
		};
		var renderFile = function() {
			document.getElementById("result").style.visibility = "visible";
		};
	</script>
</body>
</html>
