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
                <div class="card-header text-white"> <b>Registeration Form</b></div>
                <div class="card-body">
                    <form action="actionRegisterStu.php" method="post">
                        <div class="form-group">
                            <label for="full_name"><b>Name :</b> </label>
                            <input class="form-control" type="text" name="full_name" placeholder="Fill in your Full name" required>
                        </div>

                        <div class="form-group">
                            <label for="ic_number"><b>I/C No. :</b> </label>
                            <input class="form-control" type="number"  name="ic_number" placeholder="Fill in your IC Number"required>
                        </div>

                        <div class="form-group">
                            <label for="faculty"><b>Faculty :</b> </label>
                            <select class="form-control" name="faculty" required>
                                <option value="" selected disabled>Choose your Faculty</option>
                                <option value="FST">FST</option>
                                <option value="FKP">FKP</option>
                                <option value="FPBU">FPBU</option>
                                <option value="FPQS">FPQS</option>
                                <option value="FPSK">FPSK</option>
                                <option value="FSU">FSU</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="matric_number"><b>Matric No. :</b> </label>
                            <input class="form-control" type="number" name="matric_number" placeholder="Fill in your matric number" required>
                        </div>

                        <div class="form-group">
                            <label for="password_1"><b>Password :</b> </label>
                            <input class="form-control" type="password"  name="password_1" placeholder="Create your Password" required>
                        </div>

                        <div class="form-group">
                            <label for="password_2"><b>Confirm your Password :</b> </label>
                            <input class="form-control" type="password"  name="password_2" placeholder="Enter your Password again" required>
                        </div>

                        <input class="btn btn-primary btn-block text-white" type="submit" name="btnRegStu" value="Register">

                        <br>

                        <p align= "center"> Already registered? <a href="stuLogin.php"><b> Log in </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>-