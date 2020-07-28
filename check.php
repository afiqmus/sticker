<!DOCTYPE html>
<html lang="en">
<head>
  <title>Checklist Application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <style>

body {
background-color: rgb(68, 183, 255);
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

<h2>Check your Application here...</h2>

<h6><b>Attention:</b> Please check and send again the right format/details if your application <b style=color:red;>failed.</b>  <br> If your application is <b style=color:green;>approved,</b>  please collect your vehicle sticker at the HEP</h6>


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
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once("connection.php");
                            $i = 1;
                            $getChecks = "SELECT * FROM checks";
                            $result = $conn->query($getChecks);

                            if ($result->num_rows > 0) {
                                //print maklumat
                                while ($row = $result->fetch_assoc()) {
                    
                            ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $row['stuMatric'] ?></td>
                                    <td><?= $row['stuStat'] ?></td>
                                    <td><?= $row['stuReason'] ?></td>

                                  
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