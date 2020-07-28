<!DOCTYPE html>
<html lang="en">
<head>
  <title>Organizer</title>
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
                <div class="card-header text-white"> <b>Organizer Form</b></div>
                <div class="card-body">
                    <form action="actionOrganizer.php" method="post">

                    <div class="form-group">
				
						<label for='poster'><b>Add your Poster:</b></label> <br>
						<input id='poster' class="form-control" name="poster" type="file" multiple="multiple">

                        </div>

                        <div class="form-group">
                            <label for="event_name"><b>Event Name :</b> </label>
                            <input class="form-control" type="text" name="event_name" placeholder="Fill in the event name" required>
                        </div>

                        <div class="form-group">
                            <label for="time"><b>Time :</b> </label>
                            <input class="form-control" type="date"  name="time" placeholder="What is the time?"required>

                        </div>

                        <div class="form-group">
                            <label for="venue"><b>Venue :</b> </label>
                            <input class="form-control" type="text"  name="venue" placeholder="Fill in the venue"required>
                        </div>

                        <div class="form-group">
                            <label for="organization"><b>Organization :</b> </label>
                            <input class="form-control" type="text"  name="organization" placeholder="Fill in the Organizer name"required>
                        </div>

                        <div class="form-group">
                            <label for="contact"><b>Contact Number :</b> </label>
                            <input class="form-control" type="number"  name="contact" placeholder="Fill in Contact Number"required>
                        </div>

                        <div class="form-group">
                            <label for="category"><b>Category :</b> </label>
                            <select class="form-control" name="category" required>
                                <option value="" selected disabled>Choose your Category</option>
                                <option value="sport">SPORT</option>
                                <option value="volunteer">VOLUNTER</option>
                                <option value="leadership">LEADERSHIP</option>
                                <option value="innovation">INOVATION</option>
                                <option value="art">ART AND CULTURE</option>
                                <option value="entre">ENTREPURNESHIP</option>
                            </select>
                        </div>

                       

                        <input class="btn btn-primary btn-block text-white" type="submit" name="btnCreate" value="Create">

                        <br>

                        <input class="btn btn-primary btn-block text-white" type="submit" name="btnCancel" value="Cancel">

                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>