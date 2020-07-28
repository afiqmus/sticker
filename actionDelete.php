<?php 

        require_once("connection.php ");

        if(isset($_GET['Del']))
        {
            $No = $_GET['Del'];
            $query = " delete from checks where No = '".$No."'";
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