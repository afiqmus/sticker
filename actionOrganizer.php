<?php
require_once("connection.php");

if (isset($_POST["btnCreate"])) {
    $poster = mysqli_real_escape_string($conn, $_POST["poster"]);
    $event_name = mysqli_real_escape_string($conn, $_POST["event_name"]);
    $time = mysqli_real_escape_string($conn, $_POST["time"]);
    $venue = mysqli_real_escape_string($conn, $_POST["venue"]);
    $organization = mysqli_real_escape_string($conn, $_POST["organization"]);
    $contact = mysqli_real_escape_string($conn, $_POST["contact"]);
    $category = mysqli_real_escape_string($conn, $_POST["category"]);

    $fileName1 = basename($_FILES["ic_picture"]["name"]);
    $fileName2 = basename($_FILES["license"]["name"]);
    $fileName3 = basename($_FILES["roadtax"]["name"]);

    $fileType1 = pathinfo($fileName1, PATHINFO_EXTENSION);
    $fileType2 = pathinfo($fileName2, PATHINFO_EXTENSION);
    $fileType3 = pathinfo($fileName3, PATHINFO_EXTENSION);



    $sql = "INSERT INTO organizer ( poster, event , time , venue , organization, contact, category) VALUES ('{$event_name}' , '{$time}' , '{$venue}' , '{$organization}' , md5('{$contact}'))";
    
    
    
    
    if(count($errors)==0){


        
        mysqli_query($db, $query);
        $_SESSION['organization'] = $organization;
        $_SESSION['success'] = "You are now logged in";
    
        header('location: category.php');
    
    }
    
}
?>