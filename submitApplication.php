<?php
require_once("connection.php");

if (isset($_POST["btnSubApp"])) {
    
    $full_name = mysqli_real_escape_string($conn, $_POST["full_name"]);
    $ic_number = mysqli_real_escape_string($conn, $_POST["ic_number"]);
    $matric_number = mysqli_real_escape_string($conn, $_POST["matric_number"]);

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

    $sql = "INSERT INTO applications (stuName, stuIC , stuMatric, ic_picture , license , roadtax) VALUES ('{$full_name}' , '{$ic_number}' , '{$matric_number}' , '$imgContent1', '$imgContent2', '$imgContent3')";
    
    
    if(count($errors)==0){


        
        mysqli_query($db, $query);
        $_SESSION['matric_number'] = $matric_number;
        $_SESSION['success'] = "You are now logged in";
    
        header('location: indexStudent.php');
    
    }
    



    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('You are now logged in')</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "')</script>";
    }

    $conn->close();
}
?>