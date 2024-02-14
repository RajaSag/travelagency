<?php
$login = false;
  session_start();
  if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true)

  {
    $login = true;
    header("location:customerloggedin.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>SRHolidays</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background-color: rgb(157, 138, 117);
        }
        .button {
  background-color: #323b9f;
  border: none;
  color: white;
  padding: 15px 72px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  display: inline;
}
.button:hover{
    opacity: 0.8;
    color: black;
}
    </style>
</head>
<body>
    <h1 style="text-align: center;padding: 20px; ">Welcome Admin</h1>
    

<div style="text-align: center; padding-top: 30px;" >
    <a href="trip.html" class="btn btn-success btn-lg btn-outline-dark" >TRIP</a>
</div>
<div style="text-align: center; padding-top: 30px;" >
    <a href="vc1.html"  class="btn btn-success btn-lg btn-outline-dark">Vehicle</a>
</div>
<div style="text-align: center; padding-top: 30px;">
    <a href="emp0.html"  class="btn btn-success btn-lg  btn-outline-dark" >Employee</a>
</div>
<div style="text-align: center; padding-top: 30px;">
    <a href="bookedtrip.html"  class="btn btn-success btn-lg  btn-outline-dark" >Booked Trip</a>
</div>



<div style="text-align: center; padding-top: 30px;" >
    <a href="asignorunasignemp.html" class="btn btn-success btn-lg btn-outline-dark" >Asign/UnAsign_EMP</a>
</div>
<div style="text-align: center; padding-top: 30px;"  >
    <a href="asignorunasignvc.html" class="btn btn-success btn-lg btn-outline-dark" >Asign/UnAsign_vehicle</a>
</div>
<div style="text-align: center; padding-top: 30px;"  >
    <a href="logout.php" class="btn btn-success btn-lg btn-outline-dark" >logout</a>
</div>

        

</div>
</body>
</html>