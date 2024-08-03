<!DOCTYPE html>
<html lang="en">
<head>

	<title>STASIUN GEOFISIKA DENPASAR</title>
	<link href="img/favicon.ico" type="icon/x-image" rel="shortcut icon" />
	
	<meta http-equiv="refresh" content="60">
  	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
  	<meta name="description" content="">

	<!-- stylesheets css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
  	<link rel="stylesheet" href="css/nivo-lightbox.css">
  	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
  	<link rel="stylesheet" href="css/hover-min.css">
  	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/style.css?u=12">
	
	<link rel="stylesheet" href="css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="css/MarkerCluster.css" type="text/css">
    <link rel="stylesheet" href="css/custom.css" type="text/css">
    <script>L_PREFER_CANVAS = true;</script>
    <script src="lib/leaflet_073mod.js"></script>
    <script src="lib/leaflet.markercluster.js"></script>
    <script src="lib/Leaflet.Geodesic.js"></script>
    <script src="lib/extentsions.js"></script>
    <script src="lib/preLoad.js"></script>
    <script src="lib/symbols.js"></script>
    <script src="lib/Counter.js"></script>
    <script src="lib/Util.js"></script>
    <script src="lib/ClockPanel.js"></script>
    <script src="lib/DataPanel.js"></script>
    <script src="lib/LegendPanel.js"></script>
    <script src="lib/LegendPanelNC.js"></script>
    <script src="options/mapProviders.js"></script>
    <script src="lib/main.js"></script>
	<script type="text/javascript" src="data/Ajax.js?u=1"></script>
</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- Preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</div>


<!-- Navigation section -->
<div class="navbar navbar-default navbar-static-top" role="navigation" style="z-index: 9999; position:relative;">
  <div class="container-fluid">
    <div class="navbar-header">
  		<a href="#" class="navbar-brand">
  			<img src="img/logo.png" width="45px">
  		</a>
  		<p class="navbar-brand">STASIUN GEOFISIKA DENPASAR</p>
  		<p style="padding-left: 61px">Informasi Petir Bandara Real Time </br>I Gusti Ngurah Rai International Airport</p>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        </ul>
    </div>
  </div>
</div>	
	
<div style=" height: 90px; position: absolute; left: 3%; top: 575px; z-index: 2;">
    <img src="img/cg+.png"  width="70%"> 
  </div>
  <div style=" height: 90px; position: absolute; left: 17%; top: 575px; z-index: 2;">
    <img src="img/cg-.png"  width="70%"> 
  </div>
  <div style=" height: 90px; position: absolute; left: 31%; top: 580px; z-index: 2;">
    <img src="img/ic.png"  width="70%"> 
</div>

<!-- Home section -->
<section id="home" class="parallax-section">
	<div tabindex="0" class="leaflet-container leaflet-fade-anim" id="map" style="left: 0px; top:0px; width: 100%; height: 100%; position: relative; background-color: black;">
		<canvas id="pnlClockCanvas" width="220" height="30" style="z-index: 2; position:relative; left:5px; top:5px;">
			Your browser does not support HTML5 Canvas.
		</canvas>
		<canvas id="pnlCanvas" width="245" height="330" style="z-index: 2; position:relative; left:450px; top:5px;">
			Your browser does not support HTML5 Canvas.
		</canvas>
		<canvas id="pnlSymCanvas" width="245" height="65" style="z-index: 2; position:relative; left:450px; top:330px;">
			Your browser does not support HTML5 Canvas.
		</canvas>
	</div>
</section>




<!-- Copyright section -->
<section id="copyright">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <?php
          $url = 'https://geofsanglah.000webhostapp.com/dataNgurahRai.xml';
          $content_Url = file_get_contents($url, False);
	  $xml = simplexml_load_string($content_Url);
          $pisah = explode('PERINGATAN', $xml->cuaca->Warning);
        ?>
        <marquee direction="left" height="100" width="100%" style="margin-top: px"><h3><?php echo "PERINGATAN".$pisah[1];?>
        </h3></marquee>

        </br>

        <div style="text-align: center;">
         <img src="img/sosial media.png">
        </div>

      </div>  

    </div>
  </div>
</section>

<!-- javscript js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.magnific-popup.min.js"></script>

<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.backstretch.min.js"></script>

<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>

<script src="js/jquery.flexslider-min.js"></script>

<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>

<script src="js/custom.js?u=2"></script>

</body>
</html>