<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hermann Herzog - Planungs- und Sachverständigenbüro</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <!-- Optional Bootstrap theme -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/my.css">
  <?php
	if ( $_GET['link'] )
          $ln = $_GET['link'];
        else
	  $ln = 'start';

        if ($ln === "index")
	  $ln = 'start';

	$fn = "./css/$ln.css";
	if (file_exists($fn) ) {
          echo "<link rel=\"stylesheet\" href=\"$fn\">\n";
        }
  ?>
</head>
<body>
<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="start.html">Hermann Herzog</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="nav navbar-nav navbar-right">
	      <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Leistungen<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="brandschutz.html">Brandschutzplanung</a></li>
                  <li><a href="bauplanung.html">Bauplanung</a></li>
                  <li><a href="energieberatung.html">Energieberatung</a></li>
                </ul>
              </li>
              <li><a href="qualifikationen.html">Qualifikationen</a></li>
              <li><a href="referenzen.html">Referenzen</a></li>
              <li><a href="kontakt.html">Kontakt</a></li>
            </ul>
        </div>
    </div>
</nav>
<?php
	if ( $ln == 'start' or $ln == 'kontakt') {
?>
  <div class="container" id="hh-header">
    <div class="row">
       <div class="col-xs-12 col-lg-12 col-md-12 col-sm-12">
	   <img src=img/hh_logo_big.jpg class="img-responsive" alt="Logo">
       </div>
    </div>
  <!--
    <div class="row">
       <div class="col-xs-12 col-lg-4 col-md-4 col-sm-4">
	   <img src=img/hh_logo_left.jpg class="img-responsive" alt="Logo" id=hh-logo-left>
       </div>
       <div class="col-xs-12 col-lg-8 col-md-8 col-sm-8">
	 <img src=img/hh_logo_right.jpg class="img-responsive" alt="HERMANN HERZOG PLANUNGSBÜRO" id=hh-logo-right>
       </div>
    </div>
  -->
  </div>
<?php }; ?>

  <div class="container" id="hh-content">
  <?php
        $cfn = "$ln.php";
	if (! file_exists($cfn) ) {
            $cfn = '404.php';
        }

        include $cfn;
  ?>
  </div>
  <footer class="footer">
    <div class="container">
      <p>© Copyright 2017 Hermann Herzog</p>
    </div>
  </footer>
  <script src="js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
