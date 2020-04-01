<?php
require_once("connection.php");

if (isset($_POST["btnLogStaff"])) {
   
    $staff_ID = $_POST["staff_ID"];
    $staff_pass = md5($_POST["staff_pass"]);

    $conn = mysqli_connect("localhost","root","","sticker");

    if(!$conn){
        die('Could not connect:' . mysql_error());
    }

    
    mysqli_select_db($conn , "sticker");

    $results = mysqli_query($conn, "SELECT staffID, staffPass FROM staffs");

    while($row = mysqli_fetch_array($results)){
        if($row['staffID'] == $staff_ID && $row['staffPass'] == $staff_pass){
            $_SESSION['staff_ID'] = $staff_ID;
            header("Location: logsheet.php");
                exit;
        }
    

        else{
            

            echo '<script type="text/javascript">alert(\'Wrong matric number or password\')</script>';

            header("Location: staffLogin.php?msg=failed");

        }

       

    }
}

   
?>