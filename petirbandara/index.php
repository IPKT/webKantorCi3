<!DOCTYPE html>
<html lang="en">

<head>

    <!-- <title>STASIUN GEOFISIKA DENPASAR</title> -->
    <!-- <link href="img/favicon.ico" type="icon/x-image" rel="shortcut icon" /> -->
    <title>Geofisika Denpasar</title>
    <link rel="icon" type="image/x-icon" href="img/logo bmkg.png">

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
    <script>
    L_PREFER_CANVAS = true;
    </script>
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

<style>
.footer {
    background-color: #f0f0f0;
    padding: 20px 0;
    text-align: center;
    /* position: absolute; */
    bottom: 0;
    width: 100%;
}

.blink {
    animation: blink-animation 3s steps(5, start) infinite;
    -webkit-animation: blink-animation 3s steps(5, start) infinite;
}

@keyframes blink-animation {
    to {
        visibility: hidden;
    }
}

@-webkit-keyframes blink-animation {
    to {
        visibility: hidden;
    }
}
</style>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- Preloader section -->
    <div class="preloader">
        <div class="sk-spinner sk-spinner-pulse"></div>
    </div>

    <nav class="navbar navbar-default"
        style="background-color: #f0f0f0; z-index: 9999; position:relative; min-height:110px;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">
                    <img src="img/logo.png" width="60px">
                </a>
                <p class="navbar-brand visible-xs">STAGEOF DNP</p>
                <div class="navbar-brand">
                    <p class="hidden-xs" style="margin:0px; font-size:25px">STASIUN GEOFISIKA DENPASAR</p>
                    <h5 class="hidden-xs">Informasi Terkini Petir Bandara </h5>
                    <h5 class="hidden-xs">Bandara Internasional I Gusti
                        Ngurah Rai - BALI </h5>
                </div>
                <!-- <p class="navbar-brand visible-xs" style="margin-top: 10px;">STAGEOF DNP</p>
                <p class="navbar-brand visible-lg">STASIUN GEOFISIKA DENPASAR</p>
                <p class="visible-lg" style="padding-left: 61px">
                    <font size="+1">Informasi Terkini Petir Bandara</font>
                </p>
                <p class="visible-lg" style="padding-left: 61px">
                    <font size="+1">Bandara Internasional I Gusti
                        Ngurah Rai - BALI </font>
                </p> -->

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="https://stageof-bali.bmkg.go.id/">GOTO HOME</a></li>
                    <li class="dropdown hidden">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="hidden" style=" height: 90px; position: absolute; left: 3%; top: 625px; z-index: 2;">
        <img src="img/cg+.png" width="70%">
    </div>
    <div class="hidden" style=" height: 90px; position: absolute; left: 17%; top: 625px; z-index: 2;">
        <img src="img/cg-.png" width="70%">
    </div>
    <div class="hidden" style=" height: 90px; position: absolute; left: 31%; top: 630px; z-index: 2;">
        <img src="img/ic.png" width="70%">
    </div>

    <!-- Home section -->
    <section id="home" class="parallax-section">
        <div tabindex="0" class="leaflet-container leaflet-fade-anim" id="map"
            style="left: 0px; margin-top:0px; width: 100%; height: 100%; position: relative; background-color: black;">
            <canvas id="pnlClockCanvas" width="220" height="30"
                style="z-index: 2; position:relative; left:5px; top:5px;">
                Your browser does not support HTML5 Canvas.
            </canvas>
            <canvas id="pnlCanvas" width="245" height="330" style="z-index: 2; position:relative; left:450px; top:5px;">
                Your browser does not support HTML5 Canvas.
            </canvas>
            <canvas id="pnlSymCanvas" width="245" height="65"
                style="z-index: 2; position:relative; left:450px; top:330px;">
                Your browser does not support HTML5 Canvas.
            </canvas>
        </div>
    </section>


    <!-- <div class="container"> -->
    <!-- <img src="iconPetir/ic.png" width="100px" style="margin:3px; display: inline; margin-left:auto;" class=""> -->
    <!-- <img src="iconPetir/ic.png" width="100px" style="margin:3px; display: inline;" class=""> -->
    <!-- <img src="iconPetir/ic.png" width="100px" style="margin:3px; display: inline; margin-right:auto;" class=""> -->
    <!-- <div class=" col-xs-4">
           
        </div>
        <div class="col-xs-4">
            <img src="iconPetir/cgPlus.png" width="100px" style="margin:3px; display: inline;" class="">
        </div>
        <div class="col-xs-4">
            <img src="iconPetir/cgMin.png" width="100px" style="margin:3px; display: inline;" class="">
        </div> -->

    <!-- <img src="iconPetir/cg+.png" width="50px" style="margin:3px; display: inline;" class="visible-xs"> -->
    <!-- <img src="iconPetir/cg-.png" width="50px" style="margin:3px; display: inline;" class="visible-xs"> -->
    <!-- </div> -->
    <style>
    .image-container {
        text-align: center;
        /* Center the images horizontally */
    }

    .image-container img {
        display: inline-block;
        /* Display images inline */
        margin: 10px;
        /* Add some space between images */
    }
    </style>
    <div class="container-fluid image-container visible-xs">
        <img src="iconPetir/ic.png" alt="Image 1" class="img-responsive" width="50px">
        <img src="iconPetir/cgPlus.png" alt="Image 2" class="img-responsive" width="50px">
        <img src="iconPetir/cgMin.png" alt="Image 3" class="img-responsive" width="50px">
    </div>
    <div class="container-fluid image-container hidden-xs">
        <img src="iconPetir/ic.png" alt="Image 1" class="img-responsive" width="200px">
        <img src="iconPetir/cgPlus.png" alt="Image 2" class="img-responsive" width="200px">
        <img src="iconPetir/cgMin.png" alt="Image 3" class="img-responsive" width="200px">
    </div>


    <!-- Copyright section -->
    <section id="copyright">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- edit info cuaca dari bandara di bawah ini ya-->
                    <?php 
         $data = simplexml_load_file("https://stageof-bali.bmkg.go.id/xml/PeringatanDiniCuaca.xml") or die("Gagal mengakses!"); 
         ?>

                    <?php
                    
                    //function ntp($server,$port=123){
                        //echo $server;
                        //$socket=@fsockopen("udp://$server",$port,$err_no,$err_str,1);
                        //if(!$socket)return;
                        //fwrite($socket,chr(0x1b).str_repeat("\0",47));
                        ///$packetReceived=fread($socket,48);
                        //$unixTimestamp=unpack('N',$packetReceived,40)[1]-2208988800;
                        //$utcDate=date("Y-m-d H:i:s",$unixTimestamp);
                        //echo ":<b>$utcDate</b><br/>\n";
                        //$new_time = date("Y-m-d H:i:s", strtotime('+8 hours', strtotime($utcDate)));
                        //echo "WITA ".$new_time;
                        //return $new_time;
                      //}

                      //$waktuSekarang = ntp('pool.ntp.org');
                    ?>
                    <?php $sampai = $data->Akhir;
                        $sampai = explode(" ",$sampai);
                        $tanggal = $sampai[0];
                        $tahun = $sampai[2];
                        $waktu = explode(".",$sampai[4]);
                        $jam = $waktu[0];
                        $menit = $waktu[1];
                        $bulan = $sampai[1];
                        if ($bulan == "JANUARI") {
                            $bulan = "01";
                        } elseif ($bulan == "SEPTEMBER") {
                            $bulan = "09";
                        }

                        $sampai = $tahun."-".$bulan."-".$tanggal." ".$jam.":".$menit.":00";
                        //echo $sampai;
			//$sampai = "2024-9-16 11:53:00";
                        $date_str = $sampai;
			//echo "sampai".$date_str;

                        // Buat objek DateTime dari string dengan zona waktu Asia/Makassar
                        //$given_date = new DateTime($date_str, new DateTimeZone('Asia/Makassar'));
                        $given_date = date("Y-m-d H:i:s", strtotime($date_str));
                        //echo "given date".$given_date;
			//$given_date = strtotime($date_str);
			$given_date_timestamp = strtotime($date_str);
			//echo "given_date_timestamp".$given_date_timestamp;
			//echo $given_date;
			//echo $given_date_timestamp;
			//print_r($given_date);
                        // Waktu sekarang
                        //$current_time = new DateTime("now", new DateTimeZone('Asia/Makassar'));
                        //$current_time = date("Y-m-d H:i:s");
			$current_time = time() + 19574869;
			//$selisih = $given_date_timestamp - $current_time;
			//echo "Selisih ". $selisih;
			$jamSekarang = date("Y-m-d H:i:s",$current_time);
			//echo "jam sekarang" . $jamSekarang;

			$jamInput = date("Y-m-d H:i:s",$given_date_timestamp);
			//echo "jam input".$jamInput;


			//echo $current_time;
                        
                        // Hitung selisih dalam detik
                        //$time_difference_in_seconds = $given_date->getTimestamp() - $current_time->getTimestamp();
			$time_difference_in_seconds = $given_date_timestamp - $current_time;
                        // Konversi selisih waktu ke jam
                        $hours_diff = $time_difference_in_seconds / 3600;

                        // Tampilkan hasil
                        $selisih = round($hours_diff, 2);
                        //echo "Selisih waktu: " . $selisih . " jam";
			//selisih = 3;

			//echo "Selisih nya adalah ". $selisih;
                        if ($selisih < -2): ?>
                    <h3 style="text-align: center" class="blink">
                        PERINGATAN DINI CUACA WILAYAH BANDAR UDARA I GUSTI NGURAH RAI NOMOR </br></h3>
                    <h3 style="text-decoration: line-through; text-align: center" class="blink">NIHIL</h3>
                    <h3 style="text-align: center" class="blink">SUMBER : STASIUN METEOROLOGI I GUSTI NGURAH RAI.
                    </h3>
                    <?php endif;
                        if ($selisih > -2):
                        ?>
                    <h3 style="text-align: center" class="blink">
                        PERINGATAN DINI CUACA WILAYAH BANDAR UDARA I GUSTI NGURAH RAI NOMOR <?php echo $data->Nomor?>,
                        </br>BERLAKU TANGGAL <?php echo $data->Mulai?> SAMPAI DENGAN <?php echo $data->Akhir?>.
                        </br>BERDASARKAN PENGAMATAN JAM <?php echo $data->Pengamatan?>, <?php echo $data->Peringatan?>.
                        </br><?php echo $data->Prakiraan?>
                        </br>SUMBER; STASIUN METEOROLOGI I GUSTI NGURAH RAI.
                    </h3>
                    <?php endif;?>
                    </br>

                    <!-- <div style="text-align: center;">
                        <img src="img/sosial media.png">
                    </div> -->

                </div>

            </div>
        </div>

    </section>

    <footer class="footer">
        <div class="container">
            <p class="text-muted">Stasiun Geofisika Denpasar 2024</p>
        </div>
    </footer>




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