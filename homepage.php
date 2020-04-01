<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
    <style>
        
        h1, h3{
            text-align: center;
            font-family:Impact, Charcoal, sans-serif;	

        }
        h2, h4, h5{
            text-align: center;
            /* font-family: 'Aclonica'; */
            /* font-family: 'Acme';
            font-size: 22px; */
            font-family: 'Bangers';font-size: 22px;
        }
        img {
        /* display: block;
        
        border: 8px solid rgb(202, 30, 0);
        border-radius: 4px;
        padding: 10px;
        width: 500px;
        height: 300px; */
        display: inline-block;
        border: 8px solid rgb(202, 30, 0);
        border-radius: 4px;
        float:left;
        margin: 0px;
        padding: 0px;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        vertical-align:middle;
                }


        p{
            text-align: center;
        }
        .card {
        background-color: rgb(255, 224, 224);
        padding: 20px;
        margin-top: 20px;
        align-content: center;
        
        }
        body{
            border: black;
            background-color: rgba(105, 0, 0, 0.87);
        }
        hr{
        height: 10px;
        border: 1;
        box-shadow: inset 0 9px 9px -3px rgba(44, 0, 0, 0.8);
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -ms-border-radius: 5px;
        -o-border-radius: 5px;
        border-radius: 5px;
        }
        * {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
  margin-left: auto;
  margin-right: auto;        
  align-content: center;

}

.row::after {
  content: "";
  clear: both;
  display: table;
  align: center;
}

a {
    color: black;
      align-content: center;

}

    
        
        </style>

</head>
<body>

<div class="card">

<h1>Welcome to Student Vehicle Sticker Application!</h1>

<hr>

<h4>by Pharmazuellig</h4>


</div>

<div class="card">

       <h3>Please Choose:</h3>
      <div class="row">
            <div class="column" >
                <a href="stuRegister.php">
                <img src="student.png">
            </div>

            <div class="column">
            <a href="staffRegister.php">
            <img src="staff.png"> 
            </div>
      </div>
      <div class="row">
           <div class="column">
          <a href="stuRegister.php"><h5>Student</h5>
          </div>

          <div class="column">
          <a href="staffRegister.php"><h5>Staff</h5>
          </div>
      </div>
      <!-- <div class="row">
    <div class="col-sm-4">
        <div class="placeBox">
            <div class="imgBx">
                <img src="staff.png" class="img-fluid">
            </div>
        </div>
        <div class="content">
            <h3>Castelul Himeji<br>
            <span>Japonia</span></h3>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="placeBox">
            <div class="imgBx">
                <img src="staff.png" class="img-fluid">
            </div>
        </div>
        <div class="content">
            <h3>Castelul Himeji<br>
            <span>Japonia</span></h3>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="placeBox">
            <div class="imgBx">
                <img src="images/japan.jpg" class="img-fluid">
            </div>
        </div>
        <div class="content">
            <h3>Castelul Himeji<br>
            <span>Japonia</span></h3>
        </div>
    </div>
</div> -->

          </div>
    
</body>
</html>