<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticker Application</title>
</head>
<body>
    <h1>Hello</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
    Select Image File to Upload:
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
</form>



<?php
// Include the database configuration file
require_once("connection.php");
mysqli_select_db($conn , "sticker");


// Get images from the database
// $query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");

    $query = mysqli_query($conn, "SELECT * FROM images ORDER BY uploaded_on DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>

</body>
</html>