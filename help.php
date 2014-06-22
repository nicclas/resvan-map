<?php
// Remove www since the session is set for the domain without www
if ($_SERVER["HTTP_HOST"]=="www.resvan.com") {
  header("Location: http://resvan.com/map/help.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Resvan: Help</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    <link href="default.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Neuton|PT+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
    <style>
   body{
      font-family: 'PT Sans', sans-serif;
     }
   .navbar-brand {
     font-family: 'PT Sans', serif;
     font-size: 26pt;
     text-shadow: 0 0 1px rgba(60,60,60,1);
    }
   .logo {
     font-family: 'PT Sans', serif;
     font-size: 44pt;
     color: #000000;
     text-shadow: 0 0 1px rgba(60,60,60,1);
   padding-left: 10px; 
    }
   .subtitle {
     font-family: 'PT Sans', serif;
     font-size: 24pt;
     color: #000000;
     text-shadow: 0 0 1px rgba(60,60,60,1);
   padding-left: 10px; 
    }
   h4 {
     font-family: 'PT Sans', sans-serif;
     font-size: 12pt;
     margin-bottom: 2px;
   }

   input {
     font-family: 'PT Sans', sans-serif;
     font-size: 12pt;
     color: #000000;
 }
   input.notfound {
   border: 2px solid  rgba(255, 0, 0, 0.4);
   }

     .navbar-inner .container { height: 80px; }

    </style>


   <script src="assets/js/jquery.js"></script>

  </head>
  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
     <a class="navbar-brand" style="margin-top: -4px;" href="/map/">Resvan/map</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/map/help.php">Help</a></li>
            <li><a href="/map/about.php">About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

<div class="container">
<div style="height: 50px;"></div>

<h3>Analyze your Moves-app storylines on Google Maps</h3>
<p>
     Resvan/map lets you select and load storylines from the Moves-app activity tracker, vizualize the tracks on a map, and analyze time spent in defined zones.
</p>

<div style="height: 20px;"></div>
<h4>Loading your moves</h4>
<p>
     When you have logged in using Twitter and authorized this app with access to your Moves-app data, you 
can select a range of days for which the Moves storylines are fetched.
     By selecting a few days, or a few weeks, the result may look like in the figure below.
     The different types of movements are colored as in the Moves-app, grey is for general vehicle transports, green for walking, cyan for cycling and purple for running.
</p>
<img src="/map/images/rv1.jpg" style="width: 100%;" alt="Screenshot1" class="img-rounded">

<div style="height: 20px;"></div>
<h4>Defining zones</h4>
<p>
     When the data is loaded, you can define one or several circles by clicking the "Add analysis circle" and draw a circle on the map.
</p>
     <img src="/map/images/rv2.jpg" style="width: 100%;" alt="Screenshot2" class="img-rounded">

<div style="height: 20px;"></div>
<h4>Computing times in zones</h4>
<p>
     After adding circles, press "Compute times in circles" to see how much time you have spend inside the zones defined by the circles.
</p>
<img src="/map/images/rv3.jpg" alt="Screenshot3" style="width: 100%;" class="img-rounded">

<div style="height: 20px;"></div>
<h4>Future features</h4>
<p>
     The current version is an "alpha version" of the Resvan/map idea. More features will be added soon. Feel free to re-use the Javascript source code. The complete source will be available at <a href="http://www.github.com/nicclas">Github</a> soon.
</p>



<div style="height: 50px;"></div>
</div>





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="dist/js/bootstrap.min.js"></script>

   <?php include("../ga.php");?>

  </body>
</html>
