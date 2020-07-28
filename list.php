<!DOCTYPE html>
<html lang="en">
<head>
  <title>Application List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="stail.css">

  <style>
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

<h2>Welcome to Student Application List</h2>

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
                                <th>Name</th>
                                <th>I/C Number</th>
                                <th>Matric Number</th>
                                <th>Identity Card</th>
                                <th>License</th>
                                <th>Road Tax</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once("connection.php");
                            $i = 1;
                            $getApplications = "SELECT * FROM applications";
                            $result = $conn->query($getApplications);

                            if ($result->num_rows > 0) {
                                //print maklumat
                                while ($row = $result->fetch_assoc()) {
                    
                            ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $row['stuName'] ?></td>
                                    <td><?= $row['stuIC'] ?></td>
                                    <td><?= $row['stuMatric'] ?></td>
                                    <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['ic_picture']); ?>" />
</td>
                                    <td>            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['license']); ?>" />
</td>
                                    <td>            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['roadtax']); ?>" />
</td>
                                </tr>
                            <?php
                                $i++;
                                }
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