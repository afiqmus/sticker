<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Registration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">

</head>

<body>
<div class="container mt-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header text-white"> <b>Application Form</b></div>
                <div class="card-body">
                    <form action="submitApplication.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="full_name"><b>Name :</b> </label>
                            <input class="form-control" type="text" name="full_name" placeholder="Fill in your Full name" required>
                        </div>

                        <div class="form-group">
                            <label for="ic_number"><b>I/C No. :</b> </label>
                            <input class="form-control" type="number"  name="ic_number" placeholder="Fill in your IC Number"required>
                        </div>

                        <div class="form-group">
                            <label for="matric_number"><b>Matric No. :</b> </label>
                            <input class="form-control" type="number" name="matric_number" placeholder="Fill in your matric number" required>
                        </div>

						<div class="form-group">
				
						<label for='ic_picture'><b>Add your Identity Card</b></label> <br>
						<input id='ic_picture' class="form-control" name="ic_picture" type="file" multiple="multiple">

                        </div>

						<div class="form-group">
				
						<label for='license'><b>Add your Driving License:</b></label> <br>
						<input id='license' class="form-control" name="license" type="file" multiple="multiple">

                        </div>

						<div class="form-group">
				
						<label for='roadtax'><b>Add your Road Tax:</b></label> <br>
						<input id='roadtax' class="form-control" name="roadtax" type="file" multiple="multiple">

                        </div>

                        <input class="btn btn-primary btn-block text-white" type="submit" name="btnSubApp" value="Submit">

                        <br>

                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>