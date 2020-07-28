<?php
require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Login Page</title>
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
                <div class="card-header text-white"> <b>Login Page</b></div>
                <div class="card-body">
                    <form action="actionLoginStu.php" method="post">

                        <div class="form-group">
                            <label for="matric_number"><b>Matric No. :</b></label>
                            <input class="form-control" type="number" name="matric_number" placeholder="Enter your matric number" required>
                        </div>

                        <div class="form-group">
                            <label for="password_1"><b>Password :</b></label>
                            <input class="form-control" type="password" id="password_1" name="password_1" placeholder="Enter your Password" required>
                        </div>

                        <div>

                        <input type="checkbox" onclick="myFunction()"> Show Password

                        </div>

                        <br>

                        <?php
            if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') {
              echo "<strong style=color:red;>Wrong Matric Number / Password!</strong>";
              
              }
              ?>
             

                        <!-- <button class="btn btn-primary btn-block text-white" type="submit" name="btnLogStu">Login</button> -->
                        <input class="btn btn-primary btn-block text-white" type="submit" name="btnLogStu" value="Login">

                        <br>

                        <p align= "center"> Not register yet? <a href="stuRegister.php"><b> Register </p>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
function myFunction() {
  var x = document.getElementById("password_1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>