<!DOCTYPE html>
<html lang="en">
<head>
  <title>Staff Registration Form</title>
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
                <div class="card-header text-white"> <b>Registeration Form</b></div>
                <div class="card-body">
                    <form action="actionRegisterStaff.php" method="post">
                        <div class="form-group">
                            <label for="staff_name"><b>Name :</b> </label>
                            <input class="form-control" type="text" name="staff_name" placeholder="Fill in your Full name" required>
                        </div>

                        <div class="form-group">
                            <label for="staff_IC"><b>I/C No. :</b></label>
                            <input class="form-control" type="number"  name="staff_IC" placeholder="Fill in your IC Number" required>
                        </div>

                        <div class="form-group">
                            <label for="staff_ID"><b>Staff ID :</b> </label>
                            <input class="form-control" type="number" name="staff_ID" placeholder="Fill in your ID number" required>
                        </div>

                        <div class="form-group">
                            <label for="staff_pass"><b>Password :</b> </label>
                            <input class="form-control" type="password"  name="staff_pass" placeholder="Create your Password" required>
                        </div>

                        <div class="form-group">
                            <label for="staff_pass2"><b>Confirm your Password :</b> </label>
                            <input class="form-control" type="password"  name="staff_pass2" placeholder="Enter your Password again" required>
                        </div>

                        <input class="btn btn-success btn-block text-white" type="submit" name="btnRegStaff" value="Register">

                        <br>

                        <p align= "center"> Already registered? <a href="staffLogin.php" class="text-success" ><b> Log in </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>-