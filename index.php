<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jquery.form.js"></script>
<script type="text/javascript" src="scripts/upload.js"></script>
<link type="text/css" rel="stylesheet" href="style.css" />

</head>
<body>


<div class="container">
<h2>Upload Multiple Images using jQuery, Ajax and PHP</h2>
<br>
<br>
<form method="post" name="upload_form" id="upload_form" enctype="multipart/form-data" action="upload.php">
<label>Choose Multiple Images to Upload</label>
<br>
<br>
<input type="file" name="upload_images[]" id="image_file" multiple >
<div class="file_uploading hidden">
<label> </label>
<img src="uploading.gif" alt="Uploading......"/>
</div>
</form>
<div id="uploaded_images_preview"></div>
</div>
    
</body>
</html>