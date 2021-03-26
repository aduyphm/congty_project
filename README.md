# This is my demo for company's project 
In this project me and my team create a form in php for uploading file from local computers. 
Each time users put data by images to server, the inner algorithm which is a deep learning network will process with a view to seperating background from the whole image.
By then, we got the foreground of full human's body totally seperated and distinguished from background.
Let's see how we do those things.

# Instruction for settings
- Localhost: 
Set up all those files on the paths below: 
Ubuntu: /opt/lampp/htdocs
Window: C:/xampp/htdocs/....
- Phpmyadmin: 
Create a database called image_matting
In this database create 2 different tables: result and upload.
In these tables, design 2 structures contains 4 classes: id, name, links(link to image), type (image type) 
This database will be used for storing data facilitate next steps of applying deep learning algos. 
