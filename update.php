<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $No = $_GET['ID'];
        $stuMatric = $_POST['matric'];
        $stuStat = $_POST['status'];
        $stuReason = $_POST['reason'];

        $query = " update checks set stuMatric = '".$stuMatric."', stuStat='".$stuStat."',stuReason='".$stuReason."' where No='".$No."'";
        $result = mysqli_query($conn,$query);

        if($result)
        {
            header("location:edit.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:edit.php");
    }


?>