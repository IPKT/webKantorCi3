<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link href="<?php echo base_url('bootstrap/')?>css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> -->
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('style.css') ?>" />
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

    <!-- Leaflet JavaScript -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

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
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('gambar/logo bmkg.png') ?>">
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
            <div class="col-lg-4">
                <div class="container">
                    <?php
                    $data = simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/autogempa.xml") or die("Gagal mengakses!");
                    $shakemap = $data->gempa->Shakemap;
                    ?>
                    <div class="card">
                        <div class="card-header" style="background-color:#343f52; color: white;">
                            <h5>ShakeMap Gempa Dirasakan</h5>
                        </div>
                        <div class="card-body">
                            <div class="col-lg-12 gempa-map"><img
                                    src="https://data.bmkg.go.id/DataMKG/TEWS/<?php echo  $shakemap ?>" width="100%"
                                    alt=""></div>
                        </div>
                    </div>
                </div>
                <?php $this->load->view('layout/press_release') ?>
                <div class="container mt-2">
                    <?php
                    $data = simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/autogempa.xml") or die("Gagal mengakses!");
                    $shakemap = $data->gempa->Shakemap;
                    ?>
                    <div class="card">
                        <div class="card-header" style="background-color:#343f52; color: white;">
                            <h5>Indeks Kepuasan Masyarakat</h5>
                        </div>
                        <div class="card-body">
                            <div class="col-lg-12"><img src="<?php echo base_url('gambar/ikmDNP.png') ?>" alt=""
                                    width="100%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('layout/footer'); ?>


    <script>
    var map = L.map('map').setView([51.505, -0.09], 13);
    </script>
    <!-- Jquery dan Bootsrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
    <script src="<?php echo base_url('bootstrap/')?>js/bootstrap.bundle.min.js"></script>
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


</body>

</html>