<?php
header("content-type: text/css");
?>
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
body {
	background: #a9a9a9;
	color: black;
	background-repeat: no-repeat;
}
.background-area {
	width: 1000px;
	height: 300px;
	margin: 20px 300px;
	<!-- border: 1px solid black; -->
}
.flex-container {
	display: flex;
	justify-content: space-around;
}
.post_review {
	width: 1000px;
	margin: 20px 300px;
	height: 300px;
	<!-- border: 1px solid black; -->
}
.post_review img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  object-fit: contain;
  width: 300px;
  height: 300px;
}
.form_to_upload {
	width: 1000px;
	margin: 20px 300px;
	padding: 5px 0px;
	text-align: center;
}
.text-here {
	text-align: center;
	color: red;
	margin: 60px 20px;
	<!-- border: 1px solid black; -->
}
.background-area img:hover {
	transform: scale(1.5, 1.5);
	transform: translateY(-20px);
}
.rendering {
	width: 1000px;
	height: 400px;
	margin: 20px 300px;
	<!-- border: 1px solid black; -->
}
.rendering h1 {
	text-align: center;
}
.submit_for_rendering {
	width: 1000px;
	height: 50px;
	margin: 20px 300px;
	<!-- border: 1px solid black; -->
}
.submit_for_rendering button {
	border-radius: 5px;
	margin: 5px 400px;
	display: inline-block;
	<!-- border: 1px solid red; -->
	height: 30px;
	width: 200px;
}
.submit_for_rendering button:hover {
	background-color: yellow;
}
label{
	border: 1px solid black;
	border-radius: 5px;
	background-color: red;
}
label:hover {
	background-color: green;
}
.image_result {
	display: block;
    margin-left: auto;
    margin-right: auto;
    object-fit: contain;
    width: 300px;
    height: 300px;
	<!-- border: 1px solid black; -->
}