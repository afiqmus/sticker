<?php
require_once("connection.php");

if (isset($_POST["btnCheck"])) {
   
    $matric_number = mysqli_real_escape_string($conn, $_POST["matric_number"]);
    $status = mysqli_real_escape_string($conn, $_POST["status"]);
    $reason = mysqli_real_escape_string($conn, $_POST["reason"]);

 
    if(empty($matric_number)) [array_push($errors, "You must insert your matric number")];
    if(empty($status)) [array_push($errors, "You must insert your password")];
    if(empty($reason)) [array_push($errors, "You must insert your password")];


    $sql = "INSERT INTO checks (stuMatric, stuStat, stuReason) VALUES ('{$matric_number}', '{$status}' , '{$reason}'  )";
    
    
    
    
    if(count($errors)==0){


        
        mysqli_query($db, $query);
        $_SESSION['matric_number'] = $matric_number;
    
        header('location: indexStaff.php');
    
    }
    



    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('You are now logged in')</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "')</script>";
    }

    $conn->close();
}
?>