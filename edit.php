<?php 

    require_once("connection.php");
    $query = " select * from checks ";
    $result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit/Delete Application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <style>

body {
background-color:rgb(59,236,100);
}

  img {
        display: inline-block;
        border: 4px solid rgb(0, 0, 0);
        border-radius: 4px;
        float:left;
        margin: 0px;
        padding: 0px;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        vertical-align:middle;
    }
   .card {
        background-color: white;
        padding: 20px;
        margin-top: 20px;
        align-content: center;
        
        }</style>

</head>

<body>

<div class="card">

<h2>Edit the Application here...</h2>

<h6><b>Attention:</b> You can update your Students Application if their application is <b style=color:red;>failed.</b> or delete when there is duplicate</h6>


<hr>


</div>


<div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Matric Number</th>
                                <th>Status</th>
                                <th>Reason</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $No = $row['No'];
                                        $stuMatric = $row['stuMatric'];
                                        $stuStat = $row['stuStat'];
                                        $stuReason = $row['stuReason'];
                            ?>
                                    <tr>
                                        <td><?php echo $No ?></td>
                                        <td><?php echo $stuMatric ?></td>
                                        <td><?php echo $stuStat ?></td>
                                        <td><?php echo $stuReason ?></td>
                                        <td><a href="actionEdit.php?GetID=<?php echo $No ?>">Edit</a></td>
                                        <td><a href="actionDelete.php?Del=<?php echo $No ?>">Delete</a></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>    

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>