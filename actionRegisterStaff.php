<?php
require_once("connection.php");

if (isset($_POST["btnRegStaff"])) {
    $staff_name = mysqli_real_escape_string($conn, $_POST["staff_name"]);
    $staff_IC = mysqli_real_escape_string($conn, $_POST["staff_IC"]);
    $staff_ID = mysqli_real_escape_string($conn, $_POST["staff_ID"]);
    $staff_pass = mysqli_real_escape_string($conn, $_POST["staff_pass"]);
    $staff_pass2 = mysqli_real_escape_string($conn, $_POST["staff_pass2"]);


    if($password_1 != $password_2) [array_push($errors, "Password do not match")];
    $sql = "INSERT INTO staffs (staffName, staffIC , staffID , staffPass) VALUES ('{$staff_name}' , '{$staff_IC}' , '{$staff_ID}' , md5('{$staff_pass}'))";
    
    
    
    
    if(count($errors)==0){


        
        mysqli_query($db, $query);
        $_SESSION['staff_ID'] = $staff_ID;
        $_SESSION['success'] = "You are now logged in";
    
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