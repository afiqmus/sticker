<?php
// Include the database configuration file  
require_once 'connection.php';
 
// If file upload form is submitted
$status = $statusMsg = '';
if(isset($_POST["submit"])){
    $status = 'error';
    if(!empty(($_FILES["ic_picture"]["name"]) && ($_FILES["ic_picture"]["name"]) && ($_FILES["roadtax"]["name"]))) {
        // Get file info
        $fileName1 = basename($_FILES["ic_picture"]["name"]);
        $fileName2 = basename($_FILES["license"]["name"]);
        $fileName3 = basename($_FILES["roadtax"]["name"]);
 
        $fileType1 = pathinfo($fileName1, PATHINFO_EXTENSION);
        $fileType2 = pathinfo($fileName2, PATHINFO_EXTENSION);
        $fileType3 = pathinfo($fileName3, PATHINFO_EXTENSION);
        
        // Allow certain file formats
        // $allowTypes = array('jpg','png','jpeg','gif');
        $files = array($fileType1, $fileType2, $fileType3);
        // print_r($files);
       
 
            $ic_picture = $_FILES['ic_picture']['tmp_name'];
            $license = $_FILES['license']['tmp_name'];
            $roadtax = $_FILES['roadtax']['tmp_name'];
 
            $imgContent1 = addslashes(file_get_contents($ic_picture));
            $imgContent2 = addslashes(file_get_contents($license));
            $imgContent3 = addslashes(file_get_contents($roadtax));
 
         
            // Insert image content into database
            $insert = $conn->query("INSERT into images (ic_picture, license, roadtax, uploaded) VALUES ('$imgContent1', '$imgContent2', '$imgContent3', NOW())");
             
            
}
 
// Display status message
echo $statusMsg;
?>
 
 
<?php
// Include the database configuration file  
require_once 'connection.php';
 
// Get image data from database
$result = $conn->query("SELECT * FROM images ORDER BY uploaded DESC");
?>
 
<?php if($result->num_rows > 0){ ?>
    <div class="gallery">
        <?php while($row = $result->fetch_assoc()){ ?>
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['ic_picture']); ?>" />
        <?php } ?>
    </div>
<?php }else{ ?>
    <p class="status error">Image(s) not found...</p>
<?php } ?>
<?php } ?>

