<?php
// Remove www since the session is set for the domain without www
if ($_SERVER["HTTP_HOST"]=="www.resvan.com") {
  header("Location: http://resvan.com/map/");
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

    <title>Resvan: Analyze Moves-app storylines</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- link href="navbar-static-top.css" rel="stylesheet" -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="landing-page.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Neuton|PT+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
    <style>
   body{
      font-family: 'PT Sans', sans-serif;
     }
   .log{
      font-family: 'PT Sans', sans-serif;
      font-size: 8pt;
     }
   .navbar-brand {
     font-family: 'PT Sans', serif;
     font-size: 26pt;
     text-shadow: 0 0 1px rgba(60,60,60,1);
    }
   .logo {
     font-family: 'PT Sans', serif;
     font-size: 5vw;
     color: #000000;
     text-shadow: 0 0 6px rgba(10,10,10,1);
    }
   .subtitle {
     font-family: 'PT Sans', serif;
     font-size: 3vw;
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
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="margin-top: -4px;" href="#">Resvan/map</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="/map/help.php">Help</a></li>
            <li><a href="/map/about.php">About</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
 <li>
<?php
     echo "<a href=\"/map/twitteroauth/redirect.php?ref=".urlencode($_SERVER['REQUEST_URI'])."\" >
<i class=\"fa fa-twitter fa-fw\"></i>
Sign in with Twitter</a>";
?>
</li>
         </ul>

        </div><!--/.nav-collapse -->
      </div>
    </div>


    <div class="intro-header">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Resvan/map</h1>
     <h2>Analyze your Moves-app storylines on Google Maps (Alpha2.1 version)</h2>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
     <li>
<?php
     echo "<a href=\"/map/twitteroauth/redirect.php?ref=".urlencode($_SERVER['REQUEST_URI'])."\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-twitter fa-fw\"></i><span class=\"network-name\">Sign in with Twitter</span></a>";
?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->


    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Analyze your moves</h2>
                    <p class="lead">
     Visualize your <a href="http://www.moves-app.com">Moves-app</a> storylines on an interative map, based on Google Maps. Define zones by drawing circles 
and analyze the amount of time that you have spent in each zone during the selected time interval. 
</p>
                    <p class="lead">
     You can use this to find out how much time you have spent at work, time spent in a city, and time spent at bus stops, or other places.
</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img style="padding-top: 50px;" class="img-responsive" src="images/rv1small.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Start analyzing</h2>
                    <p class="lead">
     Sign in with your Twitter account. Just click here:
</p>
<div style="padding-bottom: 20px; text-align: center; margin: 0 auto;">
<?php
     echo "<a href=\"/map/twitteroauth/redirect.php?ref=".urlencode($_SERVER['REQUEST_URI'])."\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-twitter fa-fw\"></i><span class=\"network-name\">Sign in with Twitter</span></a>";
?>
</div>
                    <p class="lead">
If you do not have a Twitter account, take a minute and sign 
up at <a href="http://www.twitter.com">Twitter</a>.
	    If you not are using <a href="http://www.moves-app.com">Moves</a> on your phone, start by installing the app.
After signing in, you will be asked to authorize this app to access your Moves-app data using the Moves-app on your phone. 
You are now ready to start analyzing your moves.

                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img style="padding-top: 50px;" class="img-responsive" src="images/rv2small.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">About Resvan/map</h2>
                    <p class="lead">
    Resvan/map makes use of data from the mobile phone activity tracker <a href="http://www.moves-app.com">Moves-app</a> and use Google Maps for visualizing the data. Resvan/map is a web app by <a href="mailto:nicclas@gmail.com">Clas Rydergren</a>, <a href="http://www.twitter.com/nicclas">@nicclas</a>.</p> 
                    <p class="lead">
Resvan means "experienced traveller" in Swedish.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img style="padding-top: 50px;" class="img-responsive" src="images/rv3small.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-8 col-lg-offset-0 col-sm-push-0 col-sm-8">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Development log</h2>
                    <p class="lead">
     The current version is the third iteration, here called Alpha2.1-version.
<ul>
<li>Alpha2.1, 2014-03-02</li>
<ul>
<li>Thanks to the about 250 people that have tested the page and given me feedback.</li>
<li>A bug, resulting in problems to load data when one day or more contains no data/segement.</li>
<li>A grayscale version of the map can be selected.</li>
</ul>
</ul>
<ul>
<li>Alpha2, 2014-02-02</li>
<ul>
<li>Thanks to the about 130 people that have tested the page and given me feedback.</li>
<li>The login had problems with www and non-www URLs, this is now fixed.</li>
<li>The script can now load storylines larger than 64KB.</li>
<li>A dialog is shown after login presenting the first date for which you have Moves data. Uses the <a href="https://github.com/voronianski/jquery.avgrund.js">Avgrund</a> script.</li>
</ul>
<li>Alpha1, 2014-01-06</li>
<ul>
<li>Initial release</li>
</ul>
</ul>
                    </p>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <footer style="background-color: #e8e8e8;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li><a href="http://www.resvan.com/map/">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="help.php">Help</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="aboout.html">About</a>
                        </li>
                    </ul>
                    <ul class="list-inline">
<li>
<p class="copyright text-muted small"> by Clas Rydergren, 2014.</p>
</li>
</ul>
                </div>
            </div>
        </div>
    </footer>






    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="dist/js/bootstrap.min.js"></script>

   <!-- Include for Google Analytics -->
   <?php include("../ga.php");?>

  </body>
</html>
