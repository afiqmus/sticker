<!DOCTYPE html>
<html lang="en">
<head>
  <title>Approval Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="stail.css">

</head>

<body>
<div class="container mt-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header text-white"> <b>Approval Form</b></div>
                <div class="card-body">
                    <form action="actionCheck.php" method="post">
                        <div class="form-group">
                            <label for="matric_number"><b>Matric No :</b> </label>
                            <input class="form-control" type="text" name="matric_number" placeholder="Fill in Student's Matric Number" required>
                        </div>

                       

                        <div class="form-group">
                            <label for="status"><b>Status :</b> </label>
                            <select class="form-control" name="status" required>
                                <option value="" selected disabled>Approve/Reject</option>
                                <option value="approved">Approved</option>
                                <option value="failed">Failed</option>
                                
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="reason"><b>Reason :</b> </label>
                            <select class="form-control" name="reason" required>
                                <option value="" selected disabled>Select the reason</option>
                                <option value="-">None</option>
                                <option value="license">License</option>
                                <option value="ic_picture">IC Card</option>
                                <option value="roadtax">Roadtax</option>
                               
                            </select>
                        </div>

                        

                        <input class="btn btn-success btn-block text-white" type="submit" name="btnCheck" value="Submit">

                        <br>

                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>-