<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"">
    
    <style type="text/css">
        /*body{ font: 14px sans-serif; text-align: center; }*/
        .col-sm-3{
    margin: 20px;
}

#Main{
    text-align: center;
}

.card{
    text-align: center;
}

.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}

.navbar.navbar-light.bg-light{

    margin:10px;
}
    </style>
</head>
<body>
    <!--<div class="page-header">-->
        <!--<h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>-->
       
<!--    </div>-->
<div class="container">
  <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="file:///C:/Users/User/Desktop/DS%20Project%20Web/HomePage.html"><img src="hostel.jpg" alt="Click here to load home page " class="avatar"></a>
  <a class="navbar-brand" href="file:///C:/Users/User/Desktop/DS%20Project%20Web/user%20profile%20dashboard.html#profile" id="LoginLink"><img src="manesh.jpeg" alt="Avatar" class="avatar"></a>
</nav>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="http://localhost/gh/HomePage.php">Home</a></li>
    <li class="breadcrumb-item"><a href="file:///C:/Users/User/Desktop/DS%20Project%20Web/Login.html">Login</a></li>
    <li class="breadcrumb-item active" aria-current="page">Greenhouse Dashboard</li>
  </ol>
</nav>
<h1 id="Main">Greenhouse dashboard</h1><!--Main Header-->


<div class="row">
  <div class="col-sm-3">
    <a href="http://localhost/greenhouse/Real-time-dashboard.php">
      <div class="card"style="width: 18rem;">
        <img class="card-img-top" src="gauges.jpg" alt="Click here to view real time data in greenhouse ">
        <div class="card-body">
          <p class="card-text">Real time dashboard</p>
        </div>
      </div>
    </div>
  </a>
  <a href="http://localhost/greenhouse/greenhouse%20owner%20chat.%20php">
    <div class="col-sm-3">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="gauges.jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Complains, Messages & Suggestions</p>
        </div>
      </div>
    </div>
  </a>
  <a href="file:///C:/Users/User/Desktop/DS%20Project%20Web/Login.html">
    <div class="col-sm-3">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="gauges.jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Alert log and reports</p>
        </div>
      </div>
    </div>

  </div><!--End of the row-->
</a>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>