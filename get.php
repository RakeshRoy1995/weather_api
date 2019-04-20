<?php

error_reporting(0);
$get = json_decode(file_get_contents('http://ip-api.com/json/'),true);
date_default_timezone_set($get['timezone']);
$city = $_GET['city'];
$country = $_GET['country'];

$string ="http://api.openweathermap.org/data/2.5/weather?q=$city&appid=d81cc7dd3dfe948c802dbc91656ad1dc&units=metric";
$data = json_decode(file_get_contents($string), true);

$temp = $data['main']['temp']."C";
$cloud = $data['clouds']['all']."%";
$Humandity = $data['main']['humidity']."%";
$pressure = $data['main']['pressure']."hpa";
$Sunrise = $data['sys']['sunrize'];
$icon = $data['weather'][0]['icon'];
$speed = $data['wind']['speed']."m/s";

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Weather Api</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
  	<h1 class="btn btn-lg btn-info btn-block">Weather Api</h1>
  	<h4 class="btn btn-lg text-success">Weather Details of <?php echo $_GET['city'];   ?></h4>
    <table class="table table-striped table-dark">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Tempareture</th>
		      <th scope="col">Cloud</th>
		      <th scope="col">Humandity</th>
		      <th scope="col">Wind Speed</th>
		      <th scope="col">Pressure</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">1</th>
		      <td><?php echo $temp; ?></td>
		      <td><?php echo $cloud; ?></td>
		      <td><?php echo $Humandity; ?></td>
		      <td><?php echo $speed; ?></td>
		      <td><?php echo $pressure; ?></td>
		      
		    </tr>
		  </tbody>
    </table>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
