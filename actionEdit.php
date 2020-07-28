<?php 

    require_once("connection.php");
    $No = $_GET['GetID'];
    $query = " select * from checks where No='".$No."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $No = $row['No'];
        $stuMatric = $row['stuMatric'];
        $stuStat = $row['stuStat'];
        $stuReason = $row['stuReason'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Document</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Update Form in PHP</h3>
                        </div>
                        <div class="card-body">

                            <form action="update.php?ID=<?php echo $No ?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" Matric Number " name="matric" value="<?php echo $stuMatric ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Status " name="status" value="<?php echo $stuStat ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Reason " name="reason" value="<?php echo $stuReason ?>">
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>