<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Homepage</title>
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
          
            font-family: 'Bangers';font-size: 22px;
        }
        img {
     
        display: inline-block;
        border: 8px solid rgb(0,128,0);
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
        background-color: rgb(0,255,127);
        padding: 20px;
        margin-top: 20px;
        align-content: center;
        
        }
        body{
            border: black;
            background-color: rgb(0,100,0);
        }
        hr{
        height: 10px;
        border: 1;
        box-shadow: inset 0 9px 9px -3px rgba(34,139,34);
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

<h1>Welcome to Staff Homepage</h1>

<hr>


</div>

<div class="card">

       <h3>Please Choose:</h3>
      <div class="row">
            <div class="column" >
                <a href="list.php">
                <img src="test.jpg">
            </div>

            <div class="column">
            <a href="checkStaff.php">
            <img src="check.png"> 
            </div>

            <div class="column">
            <a href="edit.php">
            <img src="check.png"> 
            </div>

      </div>
      <div class="row">
           <div class="column">
          <a href="list.php"><h5>Check the Students Application</h5>
          </div>

          <div class="column">
          <a href="checkStaff.php"><h5>Approve/Reject Application</h5>
          </div>

          <div class="column">
          <a href="edit.php"><h5>View/Edit List</h5>
          </div>
          
      </div>
     

          </div>
    
</body>
</html>