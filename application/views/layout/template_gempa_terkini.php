<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url('bootstrap/')?>css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo  base_url('style.css') ?>" />
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <!-- Leaflet JavaScript -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <!-- AOS -->
    <link rel="stylesheet" href="<?php echo  base_url('aos.css') ?>" />
    <!-- CONTUM CSS -->
    <style>
    @keyframes fade {
        from {
            opacity: 0;
        }
    }

    .blinking {
        animation: fade 2s infinite alternate;
    }

    p {
        text-align: justify;
    }
    </style>

    <title>Geofisika Denpasar</title>
    <link rel="icon" type="image/x-icon" href="<?php echo  base_url('gambar/logo bmkg.png') ?>">
</head>

<body onload=display_jam()>
    <?php $this->load->view('layout/navbar'); ?>
    <div class="container mb-3">
        <div class="row content mt-2">
            <div class="col-lg-8">
                <?php 
                 if ($page) {
                    $this->load->view($page);
                 }
                 ?>
            </div>
            <?php $this->load->view('layout/sidebar/sidebarGempaTerkini'); ?>
        </div>
    </div>
    <?php $this->load->view('layout/footer'); ?>


    <script>
    var map = L.map('map').setView([51.505, -0.09], 13);
    </script>
    <!-- Jquery dan Bootsrap JS -->
    <script src="<?php echo base_url('bootstrap/')?>js/bootstrap.bundle.min.js"></script>
    <!-- Leaflet JavaScript -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <script type="text/javascript">
    function display_jam() {
        var refresh = 1000; // Refresh rate in milli seconds
        mytime = setTimeout('jam()', refresh)
    }

    function jam() {
        var x = new Date()
        document.getElementById('jam').innerHTML = x;
        display_jam();
    }
    </script>

    <!-- AOS -->
    <script src="<?php echo base_url('aos.js')?>"></script>
    <script>
    AOS.init();
    </script>
    <!-- Akhir AOS -->


</body>

</html>