<!DOCTYPE html>
<html>
<head>

	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Greenhouse - Real time </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

.btn-info{
	width: 150px;
	height: 150px;
	margin: 30px;
	white-space: normal;
	word-wrap: break-word;

}
    </style>


  
</head>
<body>

	<div class="container">
		<nav class="navbar navbar-light bg-light">
			<a class="navbar-brand" href="file:///C:/Users/User/Desktop/DS%20Project%20Web/HomePage.html"><img src="hostel.jpg" alt="Click here to load home page " class="avatar"></a>
			<a class="navbar-brand" href="file:///C:/Users/User/Desktop/DS%20Project%20Web/user%20profile%20dashboard.html#profile" id="LoginLink"><img src="manesh.jpeg" alt="Avatar" class="avatar"></a>
		</nav>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="http://localhost/gh/HomePage.php">Home</a></li>
				<li class="breadcrumb-item"><a href="file:///C:/Users/User/Desktop/DS%20Project%20Web/Login.html">Login</a></li>
				<li class="breadcrumb-item"><a href="http://localhost/greenhouse/welcome.php">Greenhouse Dashboard</a></li>
				<li class="breadcrumb-item active" aria-current="page">Real time dashboard</li>
			</ol>
		</nav>
		<h1 id="Main">Real time dashboard</h1><!--Main Header-->


<div class="card">
  <div class="card-body">
  	<p>Select the real time sensor data section from following sections</p>
    <a href="http://localhost/greenhouse/Real-time-temp%20and%20humidity.php"><button type="button" class="btn btn-info">Temperature & Humidity</button></a>
     <a href="http://localhost/greenhouse/Real-time-soilmoisture.php"><button type="button" class="btn btn-info">Soil Moisture</button></a>
      <a href="http://localhost/greenhouse/Real-time-tank%20water%20level.php"><button type="button" class="btn btn-info">Tank water level</button></a>
      <a href="http://localhost/greenhouse/ph%20level.php"><button type="button" class="btn btn-info">Water ph level</button></a>
        <a href="http://localhost/greenhouse/Real-time-lux%20level.php"><button type="button" class="btn btn-info">Lux level</button></a>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>