<?php
require_once("connection.php");

if (isset($_POST["btnLogStu"])) {

    
   
    $matric_number = $_POST["matric_number"];
    $password_1 = md5($_POST["password_1"]);

    $conn = mysqli_connect("localhost","root","","sticker");

    if(!$conn){
        die('Could not connect:' . mysql_error());
    }

    
    mysqli_select_db($conn , "sticker");

    $results = mysqli_query($conn, "SELECT stuMatric, stuPass FROM students");

    while($row = mysqli_fetch_array($results)){
        if($row['stuMatric'] == $matric_number && $row['stuPass'] == $password_1){
            $_SESSION['matric_number'] = $matric_number;
            header("Location: indexStudent.php");
                exit;
        }

        else{
            

           
            header("Location: stuLogin.php?msg=failed");

        }

       

    }
}



   
?>
