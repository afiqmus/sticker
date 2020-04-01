<?php
require_once("connection.php");

if (isset($_POST["btnRegStu"])) {
    $full_name = mysqli_real_escape_string($conn, $_POST["full_name"]);
    $ic_number = mysqli_real_escape_string($conn, $_POST["ic_number"]);
    $faculty = mysqli_real_escape_string($conn, $_POST["faculty"]);
    $matric_number = mysqli_real_escape_string($conn, $_POST["matric_number"]);
    $password_1 = mysqli_real_escape_string($conn, $_POST["password_1"]);
    $password_2 = mysqli_real_escape_string($conn, $_POST["password_2"]);

    if(empty($full_name)) [array_push($errors, "You must insert your full name")];
    if(empty($ic_number)) [array_push($errors, "You must insert your ic number")];
    if(empty($faculty)) [array_push($errors, "You must enter your faculty")];
    if(empty($matric_number)) [array_push($errors, "You must insert your matric number")];
    if(empty($password_1)) [array_push($errors, "You must insert your password")];
    if(empty($password_2)) [array_push($errors, "You must insert your password")];


    if($password_1 != $password_2) [array_push($errors, "Password do not match")];
    $sql = "INSERT INTO students (stuName, stuIC , stuFaculty , stuMatric, stuPass) VALUES ('{$full_name}' , '{$ic_number}' , '{$faculty}' , '{$matric_number}' , md5('{$password_1}'))";
    
    
    
    
    if(count($errors)==0){


        
        mysqli_query($db, $query);
        $_SESSION['matric_number'] = $matric_number;
        $_SESSION['success'] = "You are now logged in";
    
        header('location: logsheet.php');
    
    }
    



    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('You are now logged in')</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "')</script>";
    }

    $conn->close();
}
?>